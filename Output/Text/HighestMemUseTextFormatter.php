<?php

namespace Randy\Output\Text;

use Randy\Output\OutputFormatter;

class HighestMemUseTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getHighestMemUse();
        echo sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $array['loadtime'], $array['memory'], $array['route']);
    }

    public function match($object)
    {
        return get_class($object) === 'HighestMemUse';
    }
}
