<?php

namespace Vadim\GuestBundle;

use Doctrine\Bundle\DoctrineBundle\Registry;

class MyDbMails
{
    protected  $doctrine = null;

    protected $mailer = null;

    protected $addresseeMail = 'vadim_2991@ukr.net';

    /**
     * @param mixed $addresseeMail
     */
    public function setDestinationMail($addresseeMail)
    {
        $this->addresseeMail = $addresseeMail;
    }

    public function setDoctrine(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }


    public function sendMail($id)
    {
        $repository = $this->doctrine->getRepository('VadimHomeBundle:Mails');

        $post = $repository->find($id);
        $message =\Swift_Message::newInstance();
        $name = $post->getMailText();
        $message ->setSubject('Hello Email')
            ->setFrom('ibenhalib@gmail.com')
            ->setTo($this->addresseeMail)
            ->setBody("Hello $name" ) ;
        $this->mailer->send($message);
    }

}
