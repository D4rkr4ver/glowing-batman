<?php

class MeerDanLaadTijd
{
    private $meerDanLaadTijd = array();

    public function calculateMeerDanLaadTijd1($list, $tijd)
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
