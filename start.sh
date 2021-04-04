FILE=./vendor/autoload
if test -f "$FILE"; then
    php ./bot.php
else
    composer install && php ./bot.php
fi