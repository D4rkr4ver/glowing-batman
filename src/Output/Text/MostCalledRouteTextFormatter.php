<?php

namespace Output\Text;

use Output\OutputFormatter;
use Controllers\MostCalledRoute;

class MostCalledRouteTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param MostCalledRoute $object
     * @return string
     */
    public function output($object)
    {
        $array = $object->getMostCalledRoute();
        return sprintf('%s wordt met %sx het vaakst aangeroepen', $array['route'], $array['count']);
    }

    public function match($object)
    {
        return $object instanceof MostCalledRoute;
    }
}
