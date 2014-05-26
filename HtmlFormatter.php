<?php

class HtmlFormatter
{
    private $output = array();

    public function makeBold($array)
    {
        foreach ($array as $key => $value) {
            $this->output[$key] = '<bold>' . $value . '</bold>';
        }
    }

    public function toHtml($array)
    {
        $class = get_class($array);

        switch ($class) {
            case 'AvgLaadTijd':
                $this->output = sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $array['geheugen'], $array['laadtijd'] / $array['aantal']);
                break;
            case 'MeerDanLaadTijd':
                $this->output = sprintf('%s requests hebben meer dan %s laadtijd nodig', $array['aantal'], $array['laadtijd']);
                break;
            case 'HoogsteMemUse':
                $this->output = sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $array['laadtijd'], $array['geheugen'], $array['route']);
                break;
            default:
                break;

        }
    }

    public function getHtml()
    {
        return $this->output;
    }
}
