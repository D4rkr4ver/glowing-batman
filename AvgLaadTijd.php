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

        return sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $memUsage, $avgLaadTijd / $count) . PHP_EOL;
	}
}
