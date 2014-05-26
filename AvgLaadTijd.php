<?php

class AvgLaadTijd
{
    public function avgLaadTijd1($list, $memUsage)
	{
        $count = 0;
        $avgLaadTijd = 0;

		foreach ($list as $value) {
			if ($value[1] > $memUsage) {
				$count++;
				$avgLaadTijd += $value[0];
			}
		}

        return array(
            'geheugen' => $memUsage,
            'aantal' => $count,
            'laadtijd' => $avgLaadTijd,
        );
	}
}
