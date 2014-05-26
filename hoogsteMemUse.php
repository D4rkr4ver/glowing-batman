<?php

class HoogsteMemUse
{
    private $highestValue = array();

    public function calculateHoogsteMemUse($list)
    {
        $highestValue = null;

        foreach ($list as $value) {
            if ($value[1] > $highestValue[1]) {
                $highestValue = $value;
            }
        }

        $this->highestValue = array(
            'laadtijd' => $highestValue[0],
            'geheugen' => $highestValue[1],
            'route' => $highestValue[2],
        );
    }

    public function getHoogsteMemUse()
    {
        return $this->highestValue;
    }
}
