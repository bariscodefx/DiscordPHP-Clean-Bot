<?php

include __DIR__ . '/vendor/autoload.php';

use Discord\DiscordCommandClient;
use bariscodefx\CommandLoader;

$bot = new DiscordCommandClient([
    'token' => 'Add Your Toke'
]);

$bot->on('ready', function($discord) {
    echo "Bot is ready!", PHP_EOL;
    $commandLoader = new CommandLoader($discord);
});

$bot->run();
