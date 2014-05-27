<?php

class MeerDanLaadTijd
{
    private $meerDanLaadTijd = array();

    /**
     * Berekent het aantal requests die meer dan $tijd load tijd hebben
     *
     * @param array $list
     * @param double $tijd
     */
    public function calculateMeerDanLaadTijd(array $list, $tijd)
    {
        $meerDanLaadTijd = 0;

        foreach ($list as $value) {
            if ($value[0] > $tijd) {
                $meerDanLaadTijd++;
            }
        }

        $this->meerDanLaadTijd = array(
            'aantal' => $meerDanLaadTijd,
            'laadtijd' => $tijd,
        );
    }

    public function getMeerDanLaadTijd()
    {
        return $this->meerDanLaadTijd;
    }
}
