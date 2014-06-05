<?php

namespace Output\Html;

use Output\OutputFormatter;

class HighestMemUseHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getHighestMemUse();
        echo sprintf('<p>Het request met de hoogste memory heeft <bold>%s</bold> laadtijd, <bold>%s</bold> geheugen, en route <bold>\'%s\'</bold></p>', $array['loadtime'], $array['memory'], $array['route']);
    }

    public function match($object)
    {
        return get_class($object) === 'Controllers\HighestMemUse';
    }
}
