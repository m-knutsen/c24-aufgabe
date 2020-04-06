<?php

namespace c24\Controller;
class ErrorController implements ControllerInterface
{
    public function index()
    {
        echo "ErrorController/index";
    }
    public function notFound()
    {
        return "404";
    }
}