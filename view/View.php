<?php

namespace c24\View;

class View implements ViewInterface
{
    public $data = [];
    public $view;
    public function __construct($view, $data = [])
    {
        $this->view = $view;
        $this->data = $data;
    }

    function render()
    {
        ob_start();
        $data = $this->data;
        include($this->view . ".phtml");
        return ob_get_clean();
    }
}