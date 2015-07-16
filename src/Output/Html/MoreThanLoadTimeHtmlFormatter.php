<?php

namespace Output\Html;

use Controllers\MoreThanLoadTime;
use Output\OutputFormatter;

final class MoreThanLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results in HTML.
     *
     * @param MoreThanLoadTime $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getMoreThanLoadTime();

        return sprintf('<p><b>%d</b> requests hebben meer dan <b>%g</b> laadtijd nodig</p>', $result['count'], $result['loadTime']);
    }

    public function match($object)
    {
        return $object instanceof MoreThanLoadTime;
    }
}
