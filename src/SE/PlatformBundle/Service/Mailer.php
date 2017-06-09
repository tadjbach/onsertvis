<?php

namespace SE\PlatformBundle\Service;

class Mailer{

  protected $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
      $this->mailer  = $mailer;
  }

  public function sendEmail($advert, $subject, $user, $body)
  {

    $message = \Swift_Message::newInstance()
         ->setSubject($subject)
         ->setFrom('noreplay@serviceenchere.fr')
         ->setTo($user->getEmail())
         ->setBody($body);

       $this->mailer->send($message);
  }
}
