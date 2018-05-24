<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Request;
use Pyrrah\OpenWeatherMapBundle\Services\Client;
use GuzzleHttp\Client as GuzzleClient;

class DefaultController extends Controller
{
  /* PRIVATE VAR */
  private $apiKey = '98c4deeb26bf2ba5edbee813bfd7c163';
  private $apiUnits = 'metric';
  private $apiMode = 'json';
  private $weather = 'weather';
  private $forecast = 'forecast';
  private $apiWeatherUrl = 'http://api.openweathermap.org/data/2.5/';

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

      public function indexAction(){

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

   public function blogAction()
   {
       return $this->render('SEPlatformBundle:Default:blog.html.twig');
   }
   public function weatherAction($zipcode, $countrycode)
   {
      $this->guzzleClient = new GuzzleClient();
      $cityQuery = $zipcode.','.$countrycode;
      $baseUrlWeather = $this->apiWeatherUrl.$this->weather.'?zip='.$cityQuery.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;
      $baseUrlForecast = $this->apiWeatherUrl.$this->forecast.'?zip='.$cityQuery.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;

      $responseWeather = $this->guzzleClient->get($baseUrlWeather);
      $responseWeather = json_decode($responseWeather->getBody()->getContents());

      $responseForecast = $this->guzzleClient->get($baseUrlForecast);
      $responseForecast = json_decode($responseForecast->getBody()->getContents());

    return $this->render('SEPlatformBundle:Default:weather.html.twig', array(
        'zipCode'=>$zipcode,
        'countryCode'=>$countrycode,
        'responseWeather'=>$responseWeather,
        'responseForecast'=>$responseForecast
    ));
   }
}
