<?php

class MeerDanLoadTijd
{
	public $meerDanLoadTijd = 0;

	public function meerDanLoadTijd($list, $tijd)
	{
		foreach ($list as $value) {
			if ($value[0] > $tijd) {
				$this->meerDanLoadTijd++;
			}
		}

		return $this->meerDanLoadTijd;
	}
}
