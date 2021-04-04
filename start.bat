@echo off

if exists ./vendor/autoload.php (
    php ./index.php
) else (
    composer install
    php ./index.php
)