<?php

namespace Fly;

use pocketmine\plugin\PluginBase;
use Fly\command\FlyCommand;

class Loader extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Plugin activado by zk3lvin.");
        $this->getServer()->getCommandMap()->register("/fly", new FlyCommand($this));
    }
}
