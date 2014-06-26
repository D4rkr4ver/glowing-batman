<?php

namespace Output\Html;

use Output\OutputFormatter;
use Controllers\HighestMemUse;

class HighestMemUseHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param HighestMemUse $object
     * @return string
     */
    public function output($object)
    {
        $array = $object->getHighestMemUse();
        return sprintf('<p>Het request met de hoogste memory heeft <b>%s</b> laadtijd, <b>%s</b> geheugen, en route <b>\'%s\'</b></p>', $array['loadTime'], $array['memory'], $array['route']);
    }

    public function match($object)
    {
        return $object instanceof HighestMemUse;
    }
}
