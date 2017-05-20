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

class AdvertController extends Controller
{
    /* PRIVATE VAR */
    private $nbPerPage = 30;
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

    private function getAllAdvertByUser(){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listAdverstByUser=$em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser(null, null, $user->getId(), 1, 100000);

      return $listAdverstByUser;
    }

    private function getAdvertByUser($page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listAdverstByUser=$em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser($this->advert, $this->state, $user->getId(), $page, $this->nbPerPage);

      return $listAdverstByUser;
    }

    //TODO
    private function getAdvertState(){
        $em = $this->getDoctrineManager();
        //return $em->getRepository('SEPlatformBundle:AdvertState')->findAll();

        $list = array(
          array('id'=>1, 'labelNormal'=>'Validation en cours'),
          array('id'=>2, 'labelNormal'=>'En ligne (Enchère en cours)'),
          array('id'=>3, 'labelNormal'=>'Hors ligne (Enchère terminée)')
        );

        return $list;
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

    public function getCityByDepartementAction(Request $request){
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


    /* Action */
    public function listAction(Request $request)
    {
        $this->getListFilterAttributes($request);

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
                    'listDepartement'=>$this->getDepartement($this->region)
                ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listUserAction(Request $request, $page)
    {
      $this->getListUserFilterAttributes($request);
      $listAdverstByUser = $this->getAdvertByUser($page);
      $listAdverstByUserFilter = $this->getAllAdvertByUser();

      $titleResult = count($listAdverstByUser) == 0 ?'Aucune annonce' :
              (count($listAdverstByUser) > 1 ? count($listAdverstByUser).' annonces' :
          count($listAdverstByUser).' annonce');

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

        $session = $request->getSession();
        // On crée un objet Advert
        $advert = new Advert();

        $advert->setUser($this->getUser());

        // On crée le FormBuilder grâce au service form factory
        $form = $this->createForm(AdvertType::class, $advert);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){

                $em = $this->getDoctrine()->getManager();
                $em->persist($advert);
                $em->flush();

                $session->getFlashBag()->add('addSuccess','Annonce bien enregistrée, elle sera validée dans moins de 24h.');

                return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'ajouter'));
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

         if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande  que vous cherchez n'existe pas.");
        }

        $form = $this->createForm(AdvertEditType::class, $advert);

        if ($request->isMethod('POST')){

            $form->handleRequest($request);

            if ($form->isValid()){

                $advert->setDateUpdate(new \DateTime());

                $em->flush();

                $session->getFlashBag()->add('editSuccess','Annonce modifiée avec succes');

                return $this->redirectToRoute('se_platform_advert_edit',
                            array('slug'=> $advert->getSlug(),
                                  'id'=>$advert->getId()));
            }
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
      $advert = $em->getRepository('SEPlatformBundle:Advert')->find($id);

       if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande que vous cherchez n'existe pas.");
        }

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {

            $advert->setIsDeleted(true);
            $advert->setIsPublished(false);
            $advert->setIsEnabled(false);

            $em->flush();

            $request->getSession()->getFlashBag()->add('deleteSuccess', "La demande a bien été supprimée.");

            return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'supprimer'));
        }

          // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
          return $this->render('SEPlatformBundle:Advert:delete.html.twig', array(
              'advert' => $advert,
              'form'   => $form->createView()
          ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function validateAction($action)
    {
      switch ($action) {
            case 'supprimer':
                $title =  "Suppression de votre annonce";
                break;
            case 'ajouter':
                $title = 'Creation de votre annonce';
                break;
          }

      $content = $this->render('SEPlatformBundle:Advert:validate.html.twig',
              array('title' => $title
              ));

      return $content;
    }
    public function viewAction($slug, $id)
    {
      $em = $this->getDoctrineManager();

      $advert=$em->find('SEPlatformBundle:Advert', $id);

       /*
       - Pour une URL complete, par exemple pour un mail utiliser
        $url = $this
               ->get('router')
               ->generate('se_platform_advert_view',
                    array('slug'=> $slug,
                        'id'=> $id), UrlGeneratorInterface::ABSOLUTE_URL);

        * Et pour une utilisation dans Twig il faut remplacer le path() par url()
        *
        */

        return $this->render('SEPlatformBundle:Advert:view.html.twig',
                    array(
                      'advert'=> $advert));
    }
}
