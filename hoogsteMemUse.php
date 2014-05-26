<?php

class HoogsteMemUse
{

    public function hoogsteMemUse1($list)
    {
        $highestValue = null;

        foreach ($list as $value) {
            if ($value[1] > $highestValue[1]) {
                $highestValue = $value;
            }
        }

        return array(
            'laadtijd' => $highestValue[0],
            'geheugen' => $highestValue[1],
            'route' => $highestValue[2],
        );
    }
}
