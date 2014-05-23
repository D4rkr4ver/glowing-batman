<?php

class HoogsteMemUse
{

	public function hoogsteMemUse($list)
	{
        $highestValue = null;

		foreach ($list as $value) {
			if ($value[1] > $highestValue[1]) {
				$highestValue = $value;
			}
		}

		echo sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $highestValue[0], $highestValue[1], $highestValue[2]) . PHP_EOL;
	}
}
