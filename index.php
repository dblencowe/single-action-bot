<?php

use Dblencowe\SABot\Bot;

require_once __DIR__ . '/vendor/autoload.php';

$bot = new Bot(function($message) {
    return strrev($message);
});

echo $bot->process($_GET['message']);