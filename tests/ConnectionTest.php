<?php

declare(strict_types=1);

namespace bariscodefx;

use PHPUnit\Framework\TestCase;
use bariscodefx\Bot;

final class ConnectionTest extends TestCase {
    
    /**
     * Testing Connection
     */
    public function testConnection() {
        /**
         * Insert your bot's token to MY_TOKEN
         */
        $bot = new Bot("MY_TOKEN");
    }
    
}