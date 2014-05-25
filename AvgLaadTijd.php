<?php

class AvgLaadTijd
{
	{
		$count = 0;
    public function avgLaadTijd1($list, $memUsage)
        $avgLaadTijd = 0;

		foreach ($list as $value) {
			if ($value[1] > $memUsage) {
				$count++;
				$avgLaadTijd += $value[0];
			}
		}

        echo sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $memUsage, $avgLaadTijd / $count) . PHP_EOL;
	}
        return sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $memUsage, $avgLaadTijd / $count) . PHP_EOL;
}
