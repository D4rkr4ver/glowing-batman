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
     * @return string
     */
    public function output($object)
    {
        $array = $object->getAvgLoadTime();

        return sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['memory'], $array['avgLoadTime']);
    }

    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
