<?php
namespace HyperDevs\Managers\CommandsManager;

use HyperDevs\Practice;

class CommandsManager {

    public function __construct(Practice $practice) {

        $CommandsManager = $practice->getPluginManager();
        
        $CommandsManager->registerEvents(new EventsListener(), $practice);
    }
}