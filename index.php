<?php

require_once 'vendor/autoload.php';

use Core\Router;

$router = new Router();

echo $router->run();
