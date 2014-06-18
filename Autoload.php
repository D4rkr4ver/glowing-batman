<?php

class Autoload
{
    function loadClass($className)
    {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        require_once(__DIR__ . DIRECTORY_SEPARATOR . $className . '.php');
    }
}

$instance = new Autoload();
spl_autoload_register(array($instance, 'loadClass'));
