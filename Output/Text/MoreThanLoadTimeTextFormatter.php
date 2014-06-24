<?php

namespace Output\Text;

use Output\OutputFormatter;
use Controllers\MoreThanLoadTime;

class MoreThanLoadTimeTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param MoreThanLoadTime $object
     * @return string
     */
    public function output($object)
    {
        $array = $object->getMoreThanLoadTime();
        return sprintf('%s requests hebben meer dan %s laadtijd nodig', $array['count'], $array['loadtime']);
    }

    public function match($object)
    {
        return $object instanceof MoreThanLoadTime;
    }
}
