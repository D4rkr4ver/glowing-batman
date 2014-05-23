<?php

class meerDan5LoadTijd
{
	public $meerDan5LoadTijd = 0;

	public function meerDan5LoadTijd($list)
	{
		foreach ($list as $value) {
			if ($value[0] > 0.5) {
				$this->meerDan5LoadTijd++;
			}
		}

		return $this->meerDan5LoadTijd;
	}
}
