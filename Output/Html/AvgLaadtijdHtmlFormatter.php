<?php

class AvgLaadTijdHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getAvgLaadTijd();
        echo sprintf('<p>De gemiddelde laadtijd van items die meer dan <bold>%d</bold> geheugen gebruiken is <bold>%s</bold></p>', $array['geheugen'], $array['laadtijd'] / $array['aantal']);
    }


    public function match($object)
    {
        return get_class($object) === 'AvgLaadTijd';
    }
}
