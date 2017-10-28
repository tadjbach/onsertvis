<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
  private $nbPerPage = 20;
  private $em;
  private $search;
  private $category;
  private $region;
  private $departement;
  private $city;
  private $postalCode;

  private function getDoctrineManager(){
   return $this->getDoctrine()->getManager();
 }

 private function getListFilterAttributes(Request $request){
     $this->search = $request->query->get('search');
     $this->category = $request->query->get('category');
     $this->region = $request->query->get('region');
     $this->departement = $request->query->get('departement');
     $this->city = $request->query->get('city');
     $this->postalCode = $request->query->get('postalCode');
 }

 private function getCategory(){
   $em = $this->getDoctrineManager();
   return $em->getRepository('SEPlatformBundle:Category')->findAll();
 }

 private function getRegion(){
   $em = $this->getDoctrineManager();
    return $em->getRepository('SEPlatformBundle:Region')->findAll();
 }

 private function getDepartement($region){
   $em = $this->getDoctrineManager();
    return $em->getRepository('SEPlatformBundle:Departement')->getDepartementByRegion($region);
 }

 public function getDepartementByRegionAction(Request $request){
     $em = $this->getDoctrineManager();

     if($request->isXmlHttpRequest())
     {
       $listDepartement = $em->getRepository('SEPlatformBundle:Departement')
               ->getDepartementByRegion($request->request->get('region'));

       $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));

       $json = $serializer->serialize($listDepartement, 'json');

       return new Response($json);
     }

     return new Response(null);
 }

 public function getCityByDepartementAction(Request $request) {
         $em = $this->getDoctrineManager();

         if($request->isXmlHttpRequest())
         {
             $listCity = $em->getRepository('SEPlatformBundle:City')
                       ->getCityByDepartement($request->request->get('departement'));

             $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));

             $json = $serializer->serialize($listCity, 'json');

             return new Response($json);
         }
         return new Response(null);
     }

 public function getPostalCodeByCityAndDepartementAction(Request $request){
     $em = $this->getDoctrineManager();

     if($request->isXmlHttpRequest())
     {
         $city = $request->request->get('city');
         $dptId = $request->request->get('departement');

         $listPostalCode = $em->getRepository('SEPlatformBundle:PostalCode')
                     ->getpostalCodeByCityAndDepartement($city, $dptId);

         $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));

         $json = $serializer->serialize($listPostalCode, 'json');

         return new Response($json);
     }

     return new Response(null);
 }

     public function getPostalCodeByCityAction(Request $request){
             $em = $this->getDoctrineManager();

             if($request->isXmlHttpRequest())
             {
                 $city = $request->request->get('city');
                 $dptId = $request->request->get('departement');

                 $listPostalCode = $em
                             ->getRepository('SEPlatformBundle:PostalCode')
                             ->getCpByRegionAndDpt($city, $dptId);

          $serializer = new Serializer(
                          array(new GetSetMethodNormalizer()),
                                array('json' => new JsonEncoder()));

                 $json = $serializer->serialize($listPostalCode, 'json');

                 return new Response($json);
             }

             return new Response(null);
         }


    public function jobbeurListAction(Request $request, $page){
      $this->getListFilterAttributes($request);

      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listJobbeurs = $em->getRepository('SEPlatformBundle:User')
           ->getJobberList(
                            $this->search,
                           $this->category,
                           $this->region,
                           $this->departement,
                           $this->city,
                           $this->postalCode,
                           $page,
                           $this->nbPerPage);

     $titleResult = count($listJobbeurs) == 0 ?'Aucun jobber trouvé' :
             (count($listJobbeurs) > 1 ? count($listJobbeurs).' jobbers' :
         count($listJobbeurs).' jobber');

      $nbPages = ceil(count($listJobbeurs)/$this->nbPerPage);

     return $this->render('SEPlatformBundle:User:listJobbeur.html.twig',
             array(
               'search'=> $this->search,
               'category'=> $this->category,
               'region'=> $this->region,
               'departement'=> $this->departement,
               'city'=> $this->city,

               'postalCode'=> $this->postalCode,
               'listCategory'=>$this->getCategory(),
               'listRegions'=>$this->getRegion(),
               'listDepartement'=>$this->getDepartement($this->region),

               'titleResult'=>$titleResult,
               'nbPages'      => $nbPages,
               'page'         => $page,
               'listJobbeurs'    =>$listJobbeurs
             ));
    }

    public function addAction(Request $request){
      $content = $this->render('SEPlatformBundle:User:add.html.twig',
              array(
              ));

      return $content;
    }

    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            /*SE PlatformBundle Begin*/
            $em = $this->getDoctrine()->getManager();
            $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
                   ->getPostalCodeByValue($user->getCpCity());

            $user->setDateUpdate(new \DateTime());
            $user->setIsAcountComplete(true);

            $ip = $request->getClientIp();
            if($ip == 'unknown'){
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            $user->setIpAddress($ip);

            foreach ($postalCode as $pc) {
              $user->setPostalCode($pc);
            }
            //SE PlatformBundle End */

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('@FOSUser/Profile/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
