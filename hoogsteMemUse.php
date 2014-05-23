<?php

class hoogsteMemUse
{
	public $highestValue;

	public function hoogsteMemUse($list)
	{
		foreach ($list as $value) {
			if ($value[1] > $this->highestValue[1]) {
				$this->highestValue = $value;
			}
		}

		return $this->highestValue;
	}
}
