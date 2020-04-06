<?php

namespace c24\Controller;
class ErrorController implements ControllerInterface
{
    public function index()
    {
        return "HalloController/index";
    }
    public function notFound()
    {
        return "404";
    }
}