<?php

namespace Vadim\GuestBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class GoodSaveEvent extends Event
{

    private $lastSave;


    public function setLastSave($lastSave)
    {
        $this->lastSave = $lastSave;
    }

    /**
     * @return mixed
     */
    public function getLastSave()
    {
        return $this->lastSave;
    }

}