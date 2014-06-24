<?php

namespace Output\Text;

use Output\OutputFormatter;
use Controllers\HighestMemUse;

class HighestMemUseTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param HighestMemUse $object
     * @return string
     */
    public function output($object)
    {
        $array = $object->getHighestMemUse();
        return sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $array['loadtime'], $array['memory'], $array['route']);
    }

    public function match($object)
    {
        return $object instanceof HighestMemUse;
    }
}
