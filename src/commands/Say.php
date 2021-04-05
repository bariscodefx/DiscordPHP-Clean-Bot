<?php

/**
* Coded by bariscodefx with GNU License
*/

namespace bariscodefx\commands;

use Discord\DiscordCommandClient;

/**
* Say Command Class
*/
class Say
{

    /**
    * Say Command Class Constructor
    */
    public function __construct(DiscordCommandClient $client) {
        $client->registerCommand('say', function($msg, $args) {
            $keyword = implode(' ', $args);
            $msg->channel->sendMessage($keyword);
        }, [
            'aliases' => [
                'speak'
            ]
        ]);
    }
}