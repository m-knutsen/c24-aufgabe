<?php

namespace c24\View;

class View implements ViewInterface
{
    function render($view, $data = [])
    {
        ob_start();
        include($view . ".phtml");
        return ob_get_contents();
    }
}