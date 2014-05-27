<?php

class HoogsteMemUseHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getHoogsteMemUse();
        echo sprintf('<p>Het request met de hoogste memory heeft <bold>%s</bold> laadtijd, <bold>%s</bold> geheugen, en route <bold>\'%s\'</bold></p>', $array['laadtijd'], $array['geheugen'], $array['route']);
    }

    public function match($object)
    {
        return get_class($object) === 'HoogsteMemUse';
    }
}
