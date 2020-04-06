<?php

namespace c24\Controller;
use c24\View\View;

class HomeController implements ControllerInterface
{
    public function index()
    {
        return new View("home/index");
    }
}