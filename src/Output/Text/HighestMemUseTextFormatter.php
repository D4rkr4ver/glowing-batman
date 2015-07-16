<?php

namespace Output\Text;

use Controllers\HighestMemUse;
use Output\OutputFormatter;

final class HighestMemUseTextFormatter implements OutputFormatter
{
    /**
     * Outputs results in plain text.
     *
     * @param HighestMemUse $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getHighestMemUse();

        return sprintf('Het request met de hoogste memory heeft %g laadtijd, %d geheugen, en route \'%s\'', $result['loadTime'], $result['memory'], $result['route']);
    }

    public function match($object)
    {
        return $object instanceof HighestMemUse;
    }
}
