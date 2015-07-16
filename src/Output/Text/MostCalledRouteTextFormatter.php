<?php

namespace Output\Text;

use Controllers\MostCalledRoute;
use Output\OutputFormatter;

final class MostCalledRouteTextFormatter implements OutputFormatter
{
    /**
     * Outputs results in plain text.
     *
     * @param MostCalledRoute $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getMostCalledRoute();

        return sprintf('%s wordt met %dx het vaakst aangeroepen', $result['route'], $result['count']);
    }

    public function match($object)
    {
        return $object instanceof MostCalledRoute;
    }
}
