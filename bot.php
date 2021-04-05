<?php

include __DIR__ . '/vendor/autoload.php';

use Discord\DiscordCommandClient;
use bariscodefx\CommandLoader;

$bot = new DiscordCommandClient([
    'token' => 'ODEyNDYwNzAzOTE0MjYyNTkx.YDBE_g.lKO1aYtD6TSIZSAUvRa4rcusnZ8'
]);

$bot->on('ready', function($discord) {
    echo "Bot is ready!", PHP_EOL;
    $commandLoader = new CommandLoader($discord);
});

$bot->run();
