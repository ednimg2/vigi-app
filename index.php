<?php

use VigiApp\App\Application;

require_once 'vendor/autoload.php';

$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$controllerName = $url[0];
$controllerMethod = $url[1] ?? 'index';

$app = new Application($controllerName, $controllerMethod);
$app->loadController();
