<?php

namespace Output\Html;

use Controllers\RouteWithMostTime;
use Output\OutputFormatter;

final class RouteWithMostTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results in HTML.
     *
     * @param RouteWithMostTime $object
     * @return string
     */
    public function output($object)
    {
        $result = $object->getRouteWithMostTime();

        return sprintf('<p><b>%s</b> heeft met <b>%g</b> seconden de meeste tijd nodig, en gebruikt <b>%d</b> geheugen</p>', $result['route'], $result['time'], $result['memory']);
    }

    public function match($object)
    {
        return $object instanceof RouteWithMostTime;
    }
}
