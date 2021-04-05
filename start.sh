FILE=./vendor/autoload.php
if test -f "$FILE"; then
    php ./bot.php
else
    composer install && php ./bot.php
fi