<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class AdvertController extends Controller
{
    /* PRIVATE VAR */
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

    //TODO
    private function getAdvertByUser(){
      $em = $this->getDoctrineManager();
      $user;
      //return $em->getRepository('SEPlatformBundle:Advert')->findByUser($user);

      $list = array(
        array('id'=>1, 'title'=>'Mon annonce 1', 'state'=>1),
        array('id'=>2, 'title'=>'Mon annonce 2', 'state'=>1),
        array('id'=>3, 'title'=>'Mon annonce 3', 'state'=>2)
      );
      return $list;
    }

    //TODO
    private function getAdvertState(){
        $em = $this->getDoctrineManager();
        //return $em->getRepository('SEPlatformBundle:AdvertState')->findAll();

        $list = array(
          array('id'=>1, 'labelNormal'=>'En ligne'),
          array('id'=>2, 'labelNormal'=>'Hors ligne')
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

    public function listUserAction(Request $request)
    {
      $this->getListUserFilterAttributes($request);

        return $this->render('SEPlatformBundle:Advert:listUser.html.twig',
                array(
                  'advert'=> $this->advert,
                  'state'=> $this->state,
                  'listAdvertUser'=>$this->getAdvertByUser(),
                  'listState'=>$this->getAdvertState()
                ));
    }

    public function addAction(Request $request){

        $session = $request->getSession();

        //Add Advert in DB
        $slug = 'annonce-title';

        $session->getFlashBag()->add('info','Annonce bien enregistré, elle sera validée dans moins de 24h.');

        return  $this->render('SEPlatformBundle:Advert:add.html.twig',
                array(
                ));
/*
        return $this->redirectToRoute('se_platform_advert_view',
                array('slug'=> $slug,
                        'id'=>1));*/
    }

    public function editAction($id){
      $content = $this->render('SEPlatformBundle:Advert:edit.html.twig',
              array(
              ));

      return $content;
    }

    public function deleteAction($id){
      $content = $this->render('SEPlatformBundle:Advert:delete.html.twig',
              array(
              ));

      return $content;
    }

    public function viewAction($slug, $id)
    {
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
                    array('slug'=> $slug,
                        'id'=> $id));
    }
}
