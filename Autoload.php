<?php

function __autoload($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once(__DIR__ . DIRECTORY_SEPARATOR . $className . '.php');
}
