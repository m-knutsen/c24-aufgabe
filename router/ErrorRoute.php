<?php


namespace c24\Router;


class ErrorRoute extends Route
{
    public function __construct($controller, $action, $param = [])
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->parameters = $param;
    }
}