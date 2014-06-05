<?php

namespace Randy\Output\Html;

use Randy\Output\OutputFormatter;

class AvgLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
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
