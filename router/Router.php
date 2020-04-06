<?php

namespace c24\Router;
use c24\Config\Config;

class Router implements RouterInterface
{
    protected $controller;
    protected $action;
    protected $parameters;

    function executeRoute(RouteInterface $routeInfo)
    {
        $query = $_SERVER["QUERY_STRING"];
        $queryParts = explode("/", $query);
        if (count($queryParts) >= 1) {
            $this->controller = $queryParts[0] ?? Config::DEFAULT_CONTROLLER;
        }
        if (count($queryParts) >= 2) {
            $this->action = $queryParts[1] ?? Config::DEFAULT_CONTROLLER;
        }
    }
}