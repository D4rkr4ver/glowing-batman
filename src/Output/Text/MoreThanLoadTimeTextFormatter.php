<?php

namespace Output\Text;

use Controllers\MoreThanLoadTime;
use Output\OutputFormatter;

final class MoreThanLoadTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results in plain text.
     *
     * @param MoreThanLoadTime $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getMoreThanLoadTime();

        return sprintf('%d requests hebben meer dan %g laadtijd nodig', $result['count'], $result['loadTime']);
    }

    public function match($object)
    {
        return $object instanceof MoreThanLoadTime;
    }
}
