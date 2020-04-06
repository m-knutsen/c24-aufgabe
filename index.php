<?php

use c24\Router\Route;
use c24\Router\Router;

require_once "vendor/autoload.php";

$router = new Router();
$router->executeRoute(new Route());

