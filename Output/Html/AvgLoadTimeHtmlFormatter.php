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
     * @return string
     */
    public function output($object)
    {
        $array = $object->getAvgLoadTime();

        if ($array['count'] !== 0) {
            $array['loadtime'] = $array['loadtime'] / $array['count'];
        }
        return sprintf('<p>De gemiddelde laadtijd van items die meer dan <b>%d</b> geheugen gebruiken is <b>%s</b></p>', $array['memory'], $array['loadtime']);
    }


    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
