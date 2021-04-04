<?php

/**
 * Coded by bariscodefx with GNU License
 */

namespace bariscodefx\commands;

use Discord\DiscordCommandClient;
use Discord\CommandClient\Command;

class Help extends Command {
    
    public function __construct(DiscordCommandClient $client) {
        parent::__construct($client, "help", $this->callableFunction($msg), "Shows commands", "Shows all commands of bot", "help", 5, "You can use after 5 seconds");
    }
    
    public function callableFunction($msg) {
        $msg->channel->sendMessage("This is a test command.");
    }
    
}