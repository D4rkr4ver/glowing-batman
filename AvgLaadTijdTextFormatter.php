<?php

class AvgLaadTijdTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getAvgLaadTijd();
        echo sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['geheugen'], $array['laadtijd'] / $array['aantal']);
    }

    public function match($object)
    {
        return get_class($object) === 'AvgLaadTijd';
    }
}
