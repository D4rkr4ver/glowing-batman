<?php

namespace Output\Text;

use Controllers\AvgLoadTime;
use Output\OutputFormatter;

final class AvgLoadTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results in plain text.
     *
     * @param AvgLoadTime $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getAvgLoadTime();

        return sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %g', $result['memory'], $result['avgLoadTime']);
    }

    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
