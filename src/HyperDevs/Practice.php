<?php
namespace HyperDevs;

use pocketmine\plugin\PluginBase;
use HyperDevs\Managers\CommandsManager;
use HyperDevs\Managers\EventsManager;
class Practice extends PluginBase{

    public static $instance;

    public function onEnable(): void {
        self::$instance = $this;
        new CommandsManager($this);
        new EventsManager($this);
        $this->getLogger()->info("Plugin Enable");
    }

    public static function getInstance(): Practice {
        return self::$instance;
    }
}
