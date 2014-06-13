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
        echo sprintf('<p><b>%s</b> heeft met <b>%s</b> seconden de meeste tijd nodig, en gebruikt <b>%s</b> geheugen</p>', $array['route'], $array['time'], $array['memory']);
    }

    public function match($object)
    {
        return $object instanceof RouteWithMostTime;
    }
}
