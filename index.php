<?php

use c24\Router\Route;
use c24\Router\Router;
use c24\System\Log;

require_once "vendor/autoload.php";
echo "<pre>";
$router = new Router(new Route());
$router->executeRoute();
