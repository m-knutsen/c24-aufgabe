<?php


namespace c24\Router;

interface RouteInterface
{
    function getControllerClassName();
    function controllerExists();
    function actionExists();
}