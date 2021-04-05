<?php

/**
* Coded by bariscodefx with GNU License
*/

namespace bariscodefx\commands;

use Discord\DiscordCommandClient;

/**
* Help Command Class
*/
class Help
{

    /**
    *
    */
    public function __construct(DiscordCommandClient $client) {
        $client->unregisterCommand('help');
        $client->registerCommand('help', function($msg, $args) {

            $msg->channel->sendMessage('Test command');

        }, [
            'aliases' => [
                'yardım'
            ]
        ]);
    }
}