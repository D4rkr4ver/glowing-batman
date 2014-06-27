<?php

namespace Controllers;

class MoreThanLoadTime
{
    private $moreThanLoadTime = array();

    /**
     * Calculates the number of requests that require more than $loadTime time
     *
     * @param array $list
     * @param double $loadTime
     */
    public function calculateMoreThanLoadTime(array $list, $loadTime)
    {
        $moreThanLoadTime = 0;

        foreach ($list as $value) {
            if ($value[0] > $loadTime) {
                $moreThanLoadTime++;
            }
        }

        $this->moreThanLoadTime = array(
            'count' => $moreThanLoadTime,
            'loadTime' => $loadTime,
        );
    }

    public function getMoreThanLoadTime()
    {
        return $this->moreThanLoadTime;
    }
}
