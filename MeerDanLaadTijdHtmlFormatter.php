<?php

class MeerDanLaadTijdHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getMeerDanLaadTijd();
        echo sprintf('<p><bold>%s</bold> requests hebben meer dan <bold>%s</bold> laadtijd nodig</p>', $array['aantal'], $array['laadtijd']);
    }


    public function match($object)
    {
        return get_class($object) === 'MeerDanLaadTijd';
    }
}
