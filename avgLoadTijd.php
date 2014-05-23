<?php

class avgLoadTijd
{
	public $avgLoadTijd = 0;

	public function avgLoadTijd($list)
	{
		$count = 0;

		foreach ($list as $value) {
			if ($value[1] > 1000) {
				$count++;
				$this->avgLoadTijd += $value[0];
			}
		}
		
		return $this->avgLoadTijd / $count;
	}
}
