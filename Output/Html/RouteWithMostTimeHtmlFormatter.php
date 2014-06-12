<?php

namespace Output\Html;

use Output\OutputFormatter;
use Controllers\RouteWithMostTime;

class RouteWithMostTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param RouteWithMostTime $object
     */
    public function output($object)
    {
        $array = $object->getRouteWithMostTime();
        echo sprintf('<p><bold>%s</bold> heeft met <bold>%s</bold> seconden de meeste tijd nodig, en gebruikt <bold>%s</bold> geheugen</p>', $array['route'], $array['time'], $array['memory']);
    }

    public function match($object)
    {
        return $object instanceof RouteWithMostTime;
    }
}
