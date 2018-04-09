<?php

namespace SE\PlatformBundle\Service;

class Mailer{

  protected $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
      $this->mailer  = $mailer;
  }

  public function sendEmail($senderName, $subject, $userReceiverMail, $body)
  {

    $message = \Swift_Message::newInstance()
         ->setSubject($subject)
         ->setFrom(array('noreplay@topartisan.fr' => 'Top Artisan - '.$senderName))
         ->setTo($userReceiverMail, 'noreplay@topartisan.fr')
         ->setBcc('noreplay@topartisan.fr')
         ->setBody($body,'text/html');

       $this->mailer->send($message);
  }

  public function sendAdminEmail($sender, $subject, $receiver, $body)
  {

    $message = \Swift_Message::newInstance()
         ->setSubject($subject)
         ->setFrom(array('contact@topartisan.fr' => $sender))
         ->setTo('noreplay@topartisan.fr')
         ->setBcc($receiver)
         ->setBody($body,'text/html');

       $this->mailer->send($message);
  }
}
