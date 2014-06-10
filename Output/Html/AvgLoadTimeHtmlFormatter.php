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

        if ($array['count'] !== 0) {
            $array['loadtime'] = $array['loadtime'] / $array['count'];
        }
        echo sprintf('<p>De gemiddelde laadtijd van items die meer dan <bold>%d</bold> geheugen gebruiken is <bold>%s</bold></p>', $array['memory'], $array['loadtime']);
    }


    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
