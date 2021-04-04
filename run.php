<?php

/**
  * Coded by bariscodefx with GNU License
  */

if(!file_exists(__DIR__ . '/vendor/autoload.php')) { exec('composer install'); }

exec('php ./bot.php');
