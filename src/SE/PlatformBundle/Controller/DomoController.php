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

class DomoController extends Controller
{
  /* PRIVATE VAR */
  private $apiKey = '98c4deeb26bf2ba5edbee813bfd7c163';
  private $apiUnits = 'metric';
  private $apiMode = 'json';
  private $weather = 'weather';
  private $forecast = 'forecast';
  private $apiWeatherUrl = 'http://api.openweathermap.org/data/2.5/';

  private $pressure_1 = 1013;
  private $pressure_2 = 1020;

   public function dashboardAction()
   {
       $user = $this->getUser();

       $cityName = $user->getPostalCode()->getCity()->getLabelNormal();
       $zipcode = $user->getPostalCode()->getValue();
       $countrycode = $user->getPostalCode()->getCity()->getDepartement()->getRegion()->getCountry()->getAlpha2();

     //Online weather API
      $this->guzzleClient = new GuzzleClient();
      $cityQuery = $zipcode.','.$countrycode;
      $baseUrlWeather = $this->apiWeatherUrl.$this->weather.'?q='.$cityName.'&zip='.$zipcode.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;
      $baseUrlForecast = $this->apiWeatherUrl.$this->forecast.'?q='.$cityName.'&zip='.$cityQuery.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;

      $responseWeather = $this->guzzleClient->get($baseUrlWeather);
      $responseWeather = json_decode($responseWeather->getBody()->getContents());

      $responseForecast = $this->guzzleClient->get($baseUrlForecast);
      $responseForecast = json_decode($responseForecast->getBody()->getContents());

      //Local sensor
      $local_sensor_outdoor = array(
        'pressure'=>0,
        'temperature'=>0,
        'humidity'=>0,
        'rain'=>0
      );
      $local_sensor_indoor = array(
        'temperatureSejour'=>0,
        'humiditySejour'=>0,
        'temperatureChambre1'=>0,
        'humidityChambre1'=>0,
        'temperatureChambre2'=>0,
        'humidityChambre2'=>0
      );
      $local_light_indoor = array(
        'lightSejour'=>0,
        'lightCuisine'=>0,
        'lightChambre1'=>0,
        'lightChambre2'=>0
      );

  $local_weather_icon = '01d';
  $local_weather_desc = 'Beau';
/*      OutDoor    */
/*
      $local_weather_desc = 'Beau';
      $local_weather_icon = '01d';

      if ( ($pressure < $this->pressure_1)) {
        $local_weather_desc = 'Orages / Vent';
        $local_weather_icon = '01d';
        $pressure_alert = 'blue';
      }
      else if ($pressure < $this->pressure_2) {
        $local_weather_desc = 'Ondées / Nuageux';
        $local_weather_icon = '01d';
        $pressure_alert = 'orange';
      }*/

/*    temperature     */
  /*    $temperature = $local_sensor['temperature'];
      $temp_alert = 'green';

      if ($temperature < 18) {
        $temp_alert = 'blue';
      }
      else if ($temperature < 25) {
        $temp_alert = 'green';
      }
      else if ($temperature < 30) {
        $temp_alert = 'orange';
      }
      else {
          $temp_alert = 'red';
      }*/

/*    temperature Indoor */
    /*  $temperatureIndoor = $local_sensor['temperatureIndoor'];
      $tempindoor_alert = 'green';

      if ($temperatureIndoor < 18) {
        $tempindoor_alert = 'blue';
      }
      else if ($temperatureIndoor < 25) {
        $tempindoor_alert = 'green';
      }
      else if ($temperatureIndoor < 30) {
        $tempindoor_alert = 'orange';
      }
      else {
          $tempindoor_alert = 'red';
      }*/

/*      humidity outdoor  */
    /*  $humidity = $local_sensor['humidity'];
      $hum_alert = 'green';
      if ($humidity < 25) {
        $hum_alert = 'blue';
      }
      else if ($humidity < 50) {
        $hum_alert = 'green';
      }
      else if ($humidity < 75) {
        $hum_alert = 'orange';
      }
      else {
          $hum_alert = 'red';
      }*/

  /*    humidity Indoor */
      /*  $humidityIndoor = $local_sensor['humidityIndoor'];
        $humidityindoor_alert = 'green';

        if ($humidityIndoor < 18) {
          $humidityindoor_alert = 'blue';
        }
        else if ($humidityIndoor < 25) {
          $humidityindoor_alert = 'green';
        }
        else if ($humidityIndoor < 30) {
          $humidityindoor_alert = 'orange';
        }
        else {
            $humidityindoor_alert = 'red';
        }*/

/*      Rain   */
    /*  $rain = $local_sensor['rain'];*/






    return $this->render('SEPlatformBundle:Domo:dashboard.html.twig', array(
        'zipCode'=>$zipcode,
        'countryCode'=>$countrycode,
        'responseWeather'=>$responseWeather,
        'responseForecast'=>$responseForecast,
        'local_sensor_outdoor'=>$local_sensor_outdoor,
        'local_sensor_indoor'=>$local_sensor_indoor,
        'local_light_indoor'=>$local_light_indoor,
      /*  'local_sensor'=>$local_sensor,
        'pressure_alert'=>$pressure_alert,
        'temp_alert'=>$temp_alert,
        'tempindoor_alert'=>$tempindoor_alert,
        'hum_alert'=>$hum_alert,
        'humindoor_alert'=>$humidityindoor_alert,*/
        'local_weather_icon'=>$local_weather_icon,
        'local_weather_desc'=>$local_weather_desc
    ));
   }

   public function openweatherAction($cityName, $zipcode, $countrycode)
   {
      $this->guzzleClient = new GuzzleClient();
      $cityQuery = $zipcode.','.$countrycode;
      $baseUrlWeather = $this->apiWeatherUrl.$this->weather.'?q='.$cityName.'&zip='.$cityQuery.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;
      $baseUrlForecast = $this->apiWeatherUrl.$this->forecast.'?q='.$cityName.'&zip='.$cityQuery.'&units='.$this->apiUnits.'&mode='.$this->apiMode.'&APPID='.$this->apiKey;

      $responseWeather = $this->guzzleClient->get($baseUrlWeather);
      $responseWeather = json_decode($responseWeather->getBody()->getContents());

      $responseForecast = $this->guzzleClient->get($baseUrlForecast);
      $responseForecast = json_decode($responseForecast->getBody()->getContents());

    return $this->render('SEPlatformBundle:Domo:openweather.html.twig', array(
        'zipCode'=>$zipcode,
        'countryCode'=>$countrycode,
        'responseWeather'=>$responseWeather,
        'responseForecast'=>$responseForecast
    ));
   }

   public function cameraAction($camera_id)
   {
     return $this->render('SEPlatformBundle:Domo:camera.html.twig', array(
         'camera_id'=>$camera_id
     ));
   }
}
