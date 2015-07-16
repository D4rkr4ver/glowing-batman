<?php

namespace Output\Html;

use Controllers\HighestMemUse;
use Output\OutputFormatter;

final class HighestMemUseHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results in HTML.
     *
     * @param HighestMemUse $object
     *
     * @return string
     */
    public function output($object)
    {
        $result = $object->getHighestMemUse();

        return sprintf('<p>Het request met de hoogste memory heeft <b>%g</b> laadtijd, <b>%d</b> geheugen, en route <b>\'%s\'</b></p>', $result['loadTime'], $result['memory'], $result['route']);
    }

    public function match($object)
    {
        return $object instanceof HighestMemUse;
    }
}
