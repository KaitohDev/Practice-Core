<?php
namespace HyperDevs\Managers\EventsManager;

use HyperDevs\Practice;

class EventsManager {

    public function __construct(Practice $practice) {
        $cmdMap = $practice->getCommandMap();
        #$cmdMap->register();
    }
}
