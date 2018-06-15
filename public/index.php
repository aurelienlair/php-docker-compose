<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application();

$app->get('/ping', function () {
    return 'pong';
});

$app->run();
