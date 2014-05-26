<?php

class TextFormatter implements OutputFormatter
{
    /**
     * Outputs results to plain text
     *
     * @param $object
     */
    public function output($object)
    {
        $class = get_class($object);

        switch ($class) {
            case 'AvgLaadTijd':
                $array = $object->getAvgLaadTijd();
                echo sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['geheugen'], $array['laadtijd'] / $array['aantal']);
                break;
            case 'MeerDanLaadTijd':
                $array = $object->getMeerDanLaadTijd();
                echo sprintf('%s requests hebben meer dan %s laadtijd nodig', $array['aantal'], $array['laadtijd']);
                break;
            case 'HoogsteMemUse':
                $array = $object->getHoogsteMemUse();
                echo sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $array['laadtijd'], $array['geheugen'], $array['route']);
                break;
            default:
                break;
        }
    }
}
