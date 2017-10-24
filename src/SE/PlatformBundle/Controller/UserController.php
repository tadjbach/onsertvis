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

class UserController extends Controller
{
  private $nbPerPage = 20;
  private $em;
  private $userName;

  private function getDoctrineManager(){
   return $this->getDoctrine()->getManager();
 }

    public function jobbeurListAction(Request $request, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listJobbeurs = $em->getRepository('SEPlatformBundle:User')
           ->getJobberList(
             $this->userName,
             $page,
             $this->nbPerPage);

     $titleResult = count($listJobbeurs) == 0 ?'Aucun jobbeur trouvé' :
             (count($listJobbeurs) > 1 ? count($listJobbeurs).' jobbeurs' :
         count($listJobbeurs).' jobbeur');

      $nbPages = ceil(count($listJobbeurs)/$this->nbPerPage);

     return $this->render('SEPlatformBundle:User:listJobbeur.html.twig',
             array(
               'titleResult'=>$titleResult,
               'nbPages'      => $nbPages,
               'page'         => $page,
               'userName'     => $this->userName,
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
