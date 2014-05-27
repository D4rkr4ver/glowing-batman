<?php

class AvgLaadTijd
{
    private $avgLaadTijd = array();

    /**
     * Berekent de average load tijd van alle requests die meer dan $memUsage memory gebruiken
     *
     * @param array $list
     * @param int $memUsage
     */
    public function calculateAvgLaadTijd(array $list, $memUsage)
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
