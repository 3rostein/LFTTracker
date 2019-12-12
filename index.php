<?php
require_once('./routes/Routes.php');

function __autoload($classname)
{
    if (file_exists('./classes/' . $classname . '.php')) {
        require_once './classes/' . $classname . '.php';
    } else if (file_exists('./controllers/' . $classname . '.php')) {

        require_once './controllers/' . $classname . '.php';
    }
}
