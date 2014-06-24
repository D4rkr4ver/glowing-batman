<?php

namespace Output\Html;

use Output\OutputFormatter;
use Controllers\MoreThanLoadTime;

class MoreThanLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param MoreThanLoadTime $object
     * @return string
     */
    public function output($object)
    {
        $array = $object->getMoreThanLoadTime();
        return sprintf('<p><b>%s</b> requests hebben meer dan <b>%s</b> laadtijd nodig</p>', $array['count'], $array['loadtime']);
    }


    public function match($object)
    {
        return $object instanceof MoreThanLoadTime;
    }
}
