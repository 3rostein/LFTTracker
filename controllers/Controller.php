<?php

class Controller
{
    public static function createView($view, $args)
    {

        return include("./views/" . $view . ".php");
    }
}
