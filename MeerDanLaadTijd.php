<?php

class MeerDanLaadTijd
{
	public function meerDanLaadTijd1($list, $tijd)
	{
        $meerDanLaadTijd = 0;

		foreach ($list as $value) {
			if ($value[0] > $tijd) {
				$meerDanLaadTijd++;
			}
		}

        return array(
            'aantal' => $meerDanLaadTijd,
            'laadtijd' => $tijd,
        );
	}
}
