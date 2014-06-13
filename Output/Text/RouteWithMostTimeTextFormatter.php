<?php

namespace Output\Text;

use Output\OutputFormatter;
use Controllers\RouteWithMostTime;

class RouteWithMostTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param RouteWithMostTime $object
     */
    public function output($object)
    {
        $array = $object->getRouteWithMostTime();
        echo sprintf('%s heeft met %s seconden de meeste tijd nodig, en gebruikt %s geheugen', $array['route'], $array['time'], $array['memory']);
    }

    public function match($object)
    {
        return $object instanceof RouteWithMostTime;
    }
}
