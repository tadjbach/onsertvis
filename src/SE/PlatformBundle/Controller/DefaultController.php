<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

      public function getPostalCodeAction(Request $request){

            $em = $this
                    ->getDoctrine()
                    ->getManager();

        if($request->isXmlHttpRequest())
            {
                $cp = $request->request->get('codepostal');

                $listPostalCode=$em
                     ->getRepository('SEPlatformBundle:PostalCode')
                     ->getPostalCode($cp);

                $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));

                $json = $serializer->serialize($listPostalCode, 'json');

                return new Response($json);
            }

            return new Response(null);
        }

      public function indexAction()
      {

          $listCategory=$this->getDoctrine()
              ->getManager()->getRepository('SEPlatformBundle:Category')
              ->findAllOrder();

          $listRegion =$this->getDoctrine()
              ->getManager()->getRepository('SEPlatformBundle:Region')
              ->findAllOrder();

          return $this->render('SEPlatformBundle:Default:index.html.twig', array(
              'listCategory'=>$listCategory,
              'listRegion'=>$listRegion
          ));
      }

    public function cguAction()
   {
       return $this->render('SEPlatformBundle:Default:cgu.html.twig');
   }

   public function helpAction()
   {
       return $this->render('SEPlatformBundle:Default:help.html.twig');
   }

   public function resumAction()
   {
       return $this->render('SEPlatformBundle:Default:resum.html.twig');
   }
}
