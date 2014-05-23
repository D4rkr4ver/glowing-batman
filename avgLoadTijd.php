<?php

class AvgLoadTijd
{
	public $avgLoadTijd = 0;

	public function avgLoadTijd($list, $memUsage)
	{
		$count = 0;

		foreach ($list as $value) {
			if ($value[1] > $memUsage) {
				$count++;
				$this->avgLoadTijd += $value[0];
			}
		}
		
		return $this->avgLoadTijd / $count;
	}
}
