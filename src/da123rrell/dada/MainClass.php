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
		switch($cmd->getName()){
			case "ILandbuy":
				$sender->sendMessage("Hello ".$sender->getName()."!");
				$sender->sendMessage("thank you for reading the instructions");
				$sender->sendMessage("type /startp on the corner of your land and /endp on the other corner. after that type /landbuy");
				$sender->sendMessage("use landbuy to protect your land from griefers.");
				return true;
                        default:
                        	$sender->sendMessage("Acces denied");
                        	return false;
                         case "IFactions":
                         	$sender->sendMessage("Hello ".$sender->getName()."!");
                                $sender->sendMessage("Sorry this instruction is still in progress");
                                return true;
                        default:
                        	$sender->sendMessage("Acces denied");
                        	return false;
                            
		}
    }
 }
