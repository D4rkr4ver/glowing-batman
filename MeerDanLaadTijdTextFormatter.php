<?php

class MeerDanLaadTijdTextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getMeerDanLaadTijd();
        echo sprintf('%s requests hebben meer dan %s laadtijd nodig', $array['aantal'], $array['laadtijd']);
    }

    public function match($object)
    {
        return get_class($object) === 'MeerDanLaadTijd';
    }
}
