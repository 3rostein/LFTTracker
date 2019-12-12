<?php

class Router
{
    public static $validRoutes = array();

    public static function set($route, $function)
    {

        if ($_GET['url'] == $route) {
            $function->__invoke();
        }
    }
}
