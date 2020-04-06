<?php

namespace c24\Router;

use c24\System\Log;

class Router implements RouterInterface
{
    /**
     * @var RouteInterface
     */
    private $routeInfo;

    function __construct(RouteInterface $routeInfo)
    {
        $this->routeInfo = $routeInfo;
    }

    function executeRoute()
    {
        echo "<pre>";
        if(!$this->routeInfo->controllerExists()){
            $errorRoute = new ErrorRoute("Error", "notFound");
            return (new Router($errorRoute))->executeRoute();
        }
    }
}