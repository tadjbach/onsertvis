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
         ->setFrom(array('noreplay@serviceenchere.fr' => 'Top Artisan - '.$senderName))
         ->setTo($userReceiverMail, 'noreplay@serviceenchere.fr')
         ->setBcc('noreplay@serviceenchere.fr')
         ->setBody($body,'text/html');

       $this->mailer->send($message);
  }

  public function sendAdminEmail($sender, $subject, $receiver, $body)
  {

    $message = \Swift_Message::newInstance()
         ->setSubject($subject)
         ->setFrom(array('contact@serviceenchere.fr' => $sender))
         ->setTo('noreplay@serviceenchere.fr')
         ->setBcc($receiver)
         ->setBody($body,'text/html');

       $this->mailer->send($message);
  }
}
