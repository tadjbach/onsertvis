<?php
/**
 * Created by PhpStorm.
 * User: bach_tadj
 * Date: 23/03/2017
 * Time: 22:37
 */

namespace SE\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use SE\AuctionBundle\Form\AdvertEditType;
use SE\AuctionBundle\Form\AdvertType;
use SE\AuctionBundle\Entity\Advert;
use SE\AuctionBundle\Event\MessagePostEvent;
use SE\AuctionBundle\Event\AuctionEvents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class PostalCodeController extends Controller
{
    public function getPostalCodeAction(Request $request){
           
        $em = $this
                ->getDoctrine()
                ->getManager();
            
    if($request->isXmlHttpRequest())
        {
            $cp = $request->request->get('codepostal');
            
            $listPostalCode=$em
                 ->getRepository('SEPortalBundle:PostalCode')
                 ->getPostalCode($cp);

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
JsonEncoder()));
                
            $json = $serializer->serialize($listPostalCode, 'json');

            return new Response($json);
        }
        
        return new Response(null);
    }
}