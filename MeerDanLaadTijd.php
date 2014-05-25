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

		return sprintf('%s requests hebben meer dan %s laadtijd nodig', $meerDanLaadTijd, $tijd);
	}
}
