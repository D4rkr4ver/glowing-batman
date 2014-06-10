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
     */
    public function output($object)
    {
        $array = $object->getMoreThanLoadTime();
        echo sprintf('%s requests hebben meer dan %s laadtijd nodig', $array['count'], $array['loadtime']);
    }

    public function match($object)
    {
        return $object instanceof MoreThanLoadTime;
    }
}
