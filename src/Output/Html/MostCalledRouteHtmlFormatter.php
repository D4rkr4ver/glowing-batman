<?php

namespace Output\Html;

use Controllers\MostCalledRoute;
use Output\OutputFormatter;

final class MostCalledRouteHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results in HTML.
     *
     * @param MostCalledRoute $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getMostCalledRoute();

        return sprintf('<p><b>%s</b> wordt met <b>%dx</b> het vaakst aangeroepen</p>', $result['route'], $result['count']);
    }

    public function match($object)
    {
        return $object instanceof MostCalledRoute;
    }
}
