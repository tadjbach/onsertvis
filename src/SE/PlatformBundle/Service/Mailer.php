<?php

namespace SE\PlatformBundle\Service;

class Mailer{

  protected $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
      $this->mailer  = $mailer;
  }

  public function sendEmail($advert, $senderName, $subject, $userReceiverMail, $body)
  {

    $message = \Swift_Message::newInstance()
         ->setSubject($subject)
         ->setFrom(array('noreplay@serviceenchere.fr' => 'Service Enchère - '.$senderName))
         ->setTo($userReceiverMail)
         ->setCc('noreplay@serviceenchere.fr')
         ->setBody($body,'text/html');

       $this->mailer->send($message);
  }
}
