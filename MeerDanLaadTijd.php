<?php

class MeerDanLaadTijd
{
	public function meerDanLaadTijd($list, $tijd)
	{
        $meerDanLaadTijd = 0;

		foreach ($list as $value) {
			if ($value[0] > $tijd) {
				$meerDanLaadTijd++;
			}
		}

		echo sprintf('%s requests hebben meer dan %s laadtijd nodig', $meerDanLaadTijd, $tijd) . PHP_EOL;
	}
}
