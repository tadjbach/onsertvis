<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use SE\PlatformBundle\Form\AdvertEditType;
use SE\PlatformBundle\Form\AdvertType;
use SE\PlatformBundle\Entity\Advert;
use SE\PlatformBundle\Service\Mailer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    /* PRIVATE VAR */
    private $nbPerPage = 20;
    private $em;

        /* Search filter */
        private $search;
        private $category;
        private $region;
        private $departement;
        private $city;
        private $postalCode;

        private $advert;
        private $state;

    /* PRIVATE FUNCTION */
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

    private function getListUserFilterAttributes(Request $request){
        $this->advert = $request->query->get('advert');
        $this->state = $request->query->get('state');
    }

    private function getAdvertState(){
        $em = $this->getDoctrineManager();
        return $em->getRepository('SEPlatformBundle:AdvertState')->findAll();
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

                $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
    JsonEncoder()));

                $json = $serializer->serialize($listPostalCode, 'json');

                return new Response($json);
            }

            return new Response(null);
        }

    /*
    Get Adverts List for se_platform_advert_list route
    */
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listAction(Request $request, $page){
        $this->getListFilterAttributes($request);

        $em = $this->getDoctrineManager();

        $listAdverts = $em->getRepository('SEPlatformBundle:Advert')
                            ->getAdvertList($this->search,
                                          $this->category,
                                          $this->region,
                                          $this->departement,
                                          $this->city,
                                          $this->postalCode,
                                          $page,
                                          $this->nbPerPage);

        $titleResult = count($listAdverts) == 0 ?'Aucune demande' :
                (count($listAdverts) > 1 ? count($listAdverts).' demandes' :
            count($listAdverts).' demande');

        $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

        return $this->render('SEPlatformBundle:Advert:list.html.twig',
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
                'nbPages'     => $nbPages,
                'page'        => $page,
                'advertList'=>$listAdverts
            ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listUserAction(Request $request, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $this->getListUserFilterAttributes($request);

      $listAdverstByUser = $em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertListByUser($this->advert, $this->state, $user->getId(), $page, $this->nbPerPage);

      $listAdverstByUserFilter = $em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser($user->getId());

      $titleResult = count($listAdverstByUser) == 0 ?'Aucune demande' :
              (count($listAdverstByUser) > 1 ? count($listAdverstByUser).' demandes' :
          count($listAdverstByUser).' demande');

        $nbPages = ceil(count($listAdverstByUser)/$this->nbPerPage);

        return $this->render('SEPlatformBundle:Advert:listUser.html.twig',
                array(
                  'titleResult'=>$titleResult,
                  'nbPages'     => $nbPages,
                  'page'        => $page,
                  'advert'=> $this->advert,
                  'state'=> $this->state,
                  'listAdvertUserFilter'=>$listAdverstByUserFilter,
                  'listAdvertUser'=>$listAdverstByUser,
                  'listState'=>$this->getAdvertState()
                ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request){
        $em = $this->getDoctrineManager();
        $session = $request->getSession();
        $mailer  = $this->get('se_platform.mailer');

        $advert = new Advert();
        $advert->setUser($this->getUser());
        $advert->setUserValide($this->getUser());
		    $advert->setCommentState(0);

        $form = $this->createForm(AdvertType::class, $advert);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
               //$advert->getImage()->upload();
                $em->persist($advert);
                $em->flush();

                if ($advert->getCpCity() == null or $advert->getAddress() == null) {

                  $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
                         ->getPostalCodeByValue($this->getUser()->getCpCity());

                   foreach ($postalCode as $pc) {
                     $advert->setPostalCode($pc);
                   }

                  $advert->setAddress($this->getUser()->getAddress());
                  $advert->setCpCity($this->getUser()->getCpCity());

                  $em->flush();
                }

                else {
                  $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
                         ->getPostalCodeByValue($advert->getCpCity());

                   foreach ($postalCode as $pc) {
                     $advert->setPostalCode($pc);
                   }

                  $em->flush();
                }

                $body = $this->renderView(
                       'SEPlatformBundle:Advert:addMail.html.twig',
                       array('receiver' => $this->getUser(),
                            'advert'=> $advert->getTitle())
                   );

                $mailer->sendEmail($advert, 'Nouvelle demande', 'Création de votre demande '.$advert->getTitle(), $this->getUser()->getEmail(), $body);

                $session->getFlashBag()->add('addSuccess','Demande bien enregistrée, elle sera validée dans moins de 24h.');

                return $this->redirectToRoute('se_platform_advert_user_list');
            }
        }

        return $this->render('SEPlatformBundle:Advert:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id, Request $request){

      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $advert=$em->find('SEPlatformBundle:Advert', $id);

      $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
             ->getPostalCodeByValue($advert->getCpCity());

         if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande  que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $advert->getUser() ) {

        $form = $this->createForm(AdvertEditType::class, $advert);

        if ($request->isMethod('POST')){

            $form->handleRequest($request);
            if ($form->isValid()){

                $advert->setDateUpdate(new \DateTime());
                $advert->setIsPublished(0);

                $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
                       ->getPostalCodeByValue($advert->getCpCity());

                 foreach ($postalCode as $pc) {
                   $advert->setPostalCode($pc);
                 }

                $em->flush();

                $session->getFlashBag()->add('editSuccess','Demande modifiée avec succes, elle sera validée dans moins de 24h.');

                return $this->redirectToRoute('se_platform_advert_edit',
                            array('slug'=> $advert->getSlug(),
                                  'id'=>$advert->getId()));
            }
        }
        }
        else {
            throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
        }
        return $this->render('SEPlatformBundle:Advert:edit.html.twig', array(
            'form' => $form->createView(),
            'advert'=>$advert
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($slug, $id, Request $request){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $mailer  = $this->get('se_platform.mailer');

      $advert = $em->getRepository('SEPlatformBundle:Advert')->find($id);

       if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $advert->getUser() ) {

          $advert->setIsDeleted(true);
          $advert->setIsPublished(false);
          $advert->setIsEnabled(false);

          $em->flush();

          $body = $this->renderView(
                 'SEPlatformBundle:Advert:deleteMail.html.twig',
                 array('receiver' => $this->getUser(),
                      'advert'=> $advert->getTitle())
             );

          $mailer->sendEmail($advert, 'Suppression de votre demande',  'Suppression de votre demande '.$advert->getTitle(), $this->getUser()->getEmail(), $body);
        }
        else {
            throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
        }

        return $this->redirectToRoute('se_platform_advert_user_list');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function unpublishAction($slug, $id, Request $request){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $mailer  = $this->get('se_platform.mailer');

      $advert = $em->getRepository('SEPlatformBundle:Advert')->find($id);

       if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $advert->getUser() ) {

          $advert->setIsPublished(false);

          $em->flush();

          $body = $this->renderView(
                 'SEPlatformBundle:Advert:unpublishMail.html.twig',
                 array('receiver' => $this->getUser(),
                      'advert'=> $advert->getTitle())
             );

          $mailer->sendEmail($advert, 'Désactivation de votre demande',  'Désactivation de votre demande '.$advert->getTitle(), $this->getUser()->getEmail(), $body);
        }
        else {
            throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
        }

        return $this->redirectToRoute('se_platform_advert_user_list');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function publishAction($slug, $id, Request $request){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $mailer  = $this->get('se_platform.mailer');

      $advert = $em->getRepository('SEPlatformBundle:Advert')->find($id);

       if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $advert->getUser() ) {

          $advert->setIsPublished(true);

          $em->flush();

          $body = $this->renderView(
                 'SEPlatformBundle:Advert:publishMail.html.twig',
                 array('receiver' => $this->getUser(),
                      'advert'=> $advert->getTitle())
             );

          $mailer->sendEmail($advert, 'Activation de votre demande',  'Activation de votre demande '.$advert->getTitle(), $this->getUser()->getEmail(), $body);
        }
        else {
            throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
        }

        return $this->redirectToRoute('se_platform_advert_user_list');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function validateAction($action){
      switch ($action) {
            case 'supprimer':
                $title =  "Suppression de votre demande";
                break;
            case 'ajouter':
                $title = 'Creation de votre demande';
                break;
            case 'accept':
                $title = 'Acceptation d\'une offre';
                break;
            case 'refuserauction':
                $title = "Vous n'avez pas ce droit";
                break;
            case 'ajouterauction':
                $title = "Validation de votre offre";
                break;
            case 'refusermessage':
                $title = "Vous n'avez pas ce droit";
                break;
            case 'ajoutermessage':
                $title = "Envoi de votre message";
                break;
          }

      $content = $this->render('SEPlatformBundle:Advert:validate.html.twig',
              array('title' => $title
              ));

      return $content;
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function viewAction($slug, $id){
      $em = $this->getDoctrineManager();

      $advert=$em->find('SEPlatformBundle:Advert', $id);

      $advertSimilarList = $em->getRepository('SEPlatformBundle:Advert')->getAdvertSimilaire($advert->getCategory()->getId(), $id);

      $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();

        if ($advert->getIsPublished() == 0) {
          return $this->render('SEPlatformBundle:Advert:desactive.html.twig');
        }
        else {
          return $this->render('SEPlatformBundle:Advert:view.html.twig',
                      array(
                        'advertSimilarList'=>$advertSimilarList,
                        'calendar' => $calendar,
                        'advert'=> $advert));
        }
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function viewUserAction(Request $request, $id){
      $em = $this->getDoctrineManager();
      $advert = $em->getRepository('SEPlatformBundle:Advert')->find($id);
      return $this->render('SEPlatformBundle:Advert:viewUser.html.twig',
                  array(
                    'advert'=> $advert));
    }
}
