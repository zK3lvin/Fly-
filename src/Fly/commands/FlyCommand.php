<?php

declare(strict_types=1);

namespace Fly\commands;

use pocketmine\command\{Command, CommandSender};
use pocketmine\Player\player;
use pocketmine\utils\TextFormat as p;

class FlyCommand extends Command
{
    public function __construct()
    {
        parent::__construct("fly", "Fly command", "/fly <on|off>");
}
  public function execute(CommandSender $sender, string $commandLabel, array $args): void
{
        if(!$sender->hasPermission("fly.command")){
			  $sender->sendMessage("§4No tienes permisos para usar esto!");
			return;
		}   
			if(empty($args[0])){
				$sender->sendMessage(p::RED. "Use /fly (on|off)");
				return;
			}
			switch(strtolower($args[0])){
				case "on":
            $sender->setFlying(true);
            $sender->setAllowFlight(true);
            $sender->sendMessage(p::GREEN . "Se a activado el fly !");
            break;
        	case "off":
            $sender->setFLying(false);
            $sender->setAllowFlight(false);
            $sender->sendMessage(p::RED . "Se a desactivado el fly!");
            break;
        }
    }
}



