<?php
namespace c24\Router;

use c24\Config\Config;
use c24\System\Log;

class Route implements RouteInterface
{
    public $controller;
    public $action;
    public $parameters;

    public function __construct()
    {
        $query = $_SERVER["QUERY_STRING"];
        if($query[0] != "/"){
            $query = "/".$query;
        }
        $queryParts = explode("/", $query);
        if (count($queryParts) >= 2) {
            $this->controller = ucfirst($queryParts[1]) ?? Config::DEFAULT_CONTROLLER;
        }
        if (count($queryParts) >= 3) {
            $this->action = strtolower($queryParts[2]) ?? Config::DEFAULT_ACTION;
        }
        if (count($queryParts) >= 4) {
            $this->parameters = array_splice($queryParts, 3, count($queryParts));
        }
    }

    public function getControllerClassName(){
        return "c24\Controller\\".$this->controller . "Controller";
    }

    function controllerExists()
    {
        return class_exists($this->getControllerClassName());
    }

    function actionExists()
    {
        // TODO: Implement actionExists() method.
    }
}