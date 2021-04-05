<?php

include __DIR__ . '/vendor/autoload.php';

use Discord\DiscordCommandClient;
use bariscodefx\CommandLoader;

$bot = new DiscordCommandClient([
    'token' => 'PUT YOUR TOKEN HERE'
]);

$bot->on('ready', function($discord) {
    echo "Bot is ready!", PHP_EOL;
    $commandLoader = new CommandLoader($discord);
});

$bot->run();