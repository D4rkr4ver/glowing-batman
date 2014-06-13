<?php

namespace Output\Text;

use Output\OutputFormatter;
use Controllers\AvgLoadTime;

class AvgLoadTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param AvgLoadTime $object
     */
    public function output($object)
    {
        $array = $object->getAvgLoadTime();

        if ($array['count'] !== 0) {
            $array['loadtime'] = $array['loadtime'] / $array['count'];
        }
        echo sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['memory'], $array['loadtime']);
    }

    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
