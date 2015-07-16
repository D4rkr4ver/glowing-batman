<?php

namespace Output\Text;

use Controllers\RouteWithMostTime;
use Output\OutputFormatter;

final class RouteWithMostTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results in plain text.
     *
     * @param RouteWithMostTime $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getRouteWithMostTime();

        return sprintf('%s heeft met %g seconden de meeste tijd nodig, en gebruikt %d geheugen', $result['route'], $result['time'], $result['memory']);
    }

    public function match($object)
    {
        return $object instanceof RouteWithMostTime;
    }
}
