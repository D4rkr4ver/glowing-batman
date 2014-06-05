<?php

namespace Controllers;

class MostCalledRoute
{
	public $mostCalledRoute = array();

	public function mostCalledRoute($list)
	{
		foreach ($list as $value) {
			//for ($i = 0; $i = count($value[2]);) {
        //    }
		}
        print_r($value);
        $this->mostCalledRoute = array_flip($value);

		return $this->mostCalledRoute;
	}
}
