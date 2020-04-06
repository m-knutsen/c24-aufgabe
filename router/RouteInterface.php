<?php


namespace c24\Router;

interface RouteInterface
{
    function getControllerClassName();
    function getControllerClassNameWithoutNamespace();
    function controllerExists();
    function actionExists();
}