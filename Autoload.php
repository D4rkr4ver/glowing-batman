<?php

function loadClass($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once(__DIR__ . DIRECTORY_SEPARATOR . $className . '.php');
}

spl_autoload_register('loadClass');
