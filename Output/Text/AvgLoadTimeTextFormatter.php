<?php

namespace Output\Text;

use Output\OutputFormatter;

class AvgLoadTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getAvgLoadTime();
        echo sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['memory'], $array['loadtime'] / $array['count']);
    }

    public function match($object)
    {
        return get_class($object) === 'AvgLoadTime';
    }
}
