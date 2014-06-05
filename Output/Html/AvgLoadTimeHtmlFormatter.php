<?php

namespace Output\Html;

use Output\OutputFormatter;
use Controllers\AvgLoadTime;

class AvgLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param AvgLoadTime $object
     */
    public function output($object)
    {
        $array = $object->getAvgLoadTime();
        echo sprintf('<p>De gemiddelde laadtijd van items die meer dan <bold>%d</bold> geheugen gebruiken is <bold>%s</bold></p>', $array['memory'], $array['loadtime'] / $array['count']);
    }


    public function match($object)
    {
        return get_class($object) === 'AvgLoadTime';
    }
}
