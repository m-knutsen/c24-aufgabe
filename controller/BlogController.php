<?php

namespace c24\Controller;
use c24\Model\BlogEntry;
use c24\View\View;

class BlogController implements ControllerInterface
{
    public function index()
    {
        $blogEntry =
        $view = new View("blog/index", ["test" => "test"]);
        return $view->render();
    }
}