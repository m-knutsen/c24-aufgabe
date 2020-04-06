<?php

namespace c24\Router;

use c24\Config\Config;
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
        if (!$this->routeInfo->controllerExists()) {
            Log::Info("Controller not found", ["route" => $this->routeInfo]);
            $errorRoute = new ErrorRoute("Error", "notFound");
            return (new Router($errorRoute))->executeRoute();
        } else {
            $controllerType = $this->routeInfo->getControllerClassName();
            $controller = new $controllerType;
            if(method_exists($controller, $this->routeInfo->action)){
                //call_user_func($this->routeInfo->action, $controller);
                $method = $this->routeInfo->action;
                echo $controller->$method();
                return;
            }
            elseif (method_exists($controller, Config::DEFAULT_ACTION)){
                //call_user_func(Config::DEFAULT_ACTION, $controller);
                $method = Config::DEFAULT_ACTION;
                echo $controller->$method();
                return;
            }
            else {
                $errorRoute = new ErrorRoute("Error", "notFound");
                return (new Router($errorRoute))->executeRoute();
            }
        }
    }
}