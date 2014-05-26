<?php

class AvgLaadTijd
{
    private $avgLaadTijd = array();

    public function calculateAvgLaadTijd($list, $memUsage)
    {
        $count = 0;
        $avgLaadTijd = 0;

        foreach ($list as $value) {
            if ($value[1] > $memUsage) {
                $count++;
                $avgLaadTijd += $value[0];
            }
        }

        $this->avgLaadTijd = array(
            'geheugen' => $memUsage,
            'aantal' => $count,
            'laadtijd' => $avgLaadTijd,
        );
    }

    public function getAvgLaadTijd()
    {
        return $this->avgLaadTijd;
    }
}
