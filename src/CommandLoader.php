<?php

/**
* Coded by bariscodefx with GNU License
*/

namespace bariscodefx;

use Discord\DiscordCommandClient;

/**
* CommandLoader
*/
class CommandLoader
{

    /**
    * CommandLoader Constructor
    */
    public function __construct(DiscordCommandClient $client) {
        $dir = __DIR__ . '/commands';

        foreach (scandir($dir) as $file) {
            $extension = substr($file, -4);
            if ($file != '.' && $file != '..' && $extension == '.php') {
                $class = substr($file, 0, -4);
                $classnamespace = 'bariscodefx\commands\\' . $class;
                $cmd = new $classnamespace($client);
            }
        }
    }

}