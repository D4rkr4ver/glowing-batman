<?php

namespace Output\Html;

use Controllers\AvgLoadTime;
use Output\OutputFormatter;

final class AvgLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results in HTML.
     *
     * @param AvgLoadTime $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getAvgLoadTime();

        return sprintf('<p>De gemiddelde laadtijd van items die meer dan <b>%d</b> geheugen gebruiken is <b>%g</b></p>', $result['memory'], $result['avgLoadTime']);
    }

    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
