<?php

namespace Feed;

use Feed\Command\feed;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getCommandMap()->register("feed", new feed($this));
        $this->getServer()->getLogger()->info("Loaded SubCommand feed");
    }
}
