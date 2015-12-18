<?php

namespace da123rrell\dada;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\command;
use pocketmine\Player;

class MainClass extends PluginBase{
    
    public function onEnable(){
        $this->getlogger()->info("instructions loaded");
    }
    
    public function onDisable(){
        $this->getlogger()->info("Instructions unloaded");
    }
    
    public function onLoad(){
        $this->getlogger()->info("loading instructions...");
    }
    
    public function onCommand(CommandSender $sender,command $cmd, $label, array $args) {
		switch($command->getName()){
			case "buyland":
                            $sender->sendMessage("Hello ".$sender->getName()."!");
                            $sender->sendMessage("thank you for reading the instructions");
							$sender->sendMessage("type /startp on the corner of your land and /endp on the other corner. after that type /landbuy");
                            return true;
                        default:
                            return false; 
                         case "factions":
                            $sender->sendMessage("Hello ".$sender->getName()."!");
                            return true;
                        default:
                            return false;
		}
    }
 }