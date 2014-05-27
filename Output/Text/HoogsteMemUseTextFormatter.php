<?php

class HoogsteMemUseTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getHoogsteMemUse();
        echo sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $array['laadtijd'], $array['geheugen'], $array['route']);
    }

    public function match($object)
    {
        return get_class($object) === 'HoogsteMemUse';
    }
}
