<?php
namespace c24\Router;

interface RouterInterface
{
    function executeRoute(RouteInterface $routeInfo);
}