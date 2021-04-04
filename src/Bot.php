<?php

/**
 * Coded by bariscodefx with GNU License
 */

namespace bariscodefx;

use Discord\DiscordCommandClient;

class Bot extends DiscordCommandClient {
    
    public function __construct(string $token) {
        parent::__construct([
            'token' => $token
        ]);
    }
    
}