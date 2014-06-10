<?php

namespace Output\Html;

use Output\OutputFormatter;
use Controllers\MostCalledRoute;

class MostCalledRouteHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param MostCalledRoute $object
     */
    public function output($object)
    {
        $array = $object->getMostCalledRoute();
        echo sprintf('<p><bold>%s</bold> wordt met <bold>%sx</bold> het vaakst aangeroepen</p>', $array['route'], $array['count']);
    }

    public function match($object)
    {
        return $object instanceof MostCalledRoute;
    }
}
