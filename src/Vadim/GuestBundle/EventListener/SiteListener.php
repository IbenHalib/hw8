<?php

namespace Harentius\SiteBundle\EventListener;

use Vadim\GuestBundle\Event\GoodSaveEvent;
use Vadim\GuestBundle\MyDbMails;

class SiteListener {

    private $mailer;

    public function __construct(MyDbMails $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onPostSave(GoodSaveEvent $event)
    {
        $this->$event->getGoodSave();
        
    }
}