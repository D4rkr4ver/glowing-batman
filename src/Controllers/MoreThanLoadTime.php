<?php

namespace Controllers;

final class MoreThanLoadTime
{
    private $moreThanLoadTime = [];

    /**
     * Calculates the number of requests that require more than $loadTime time.
     *
     * @param array  $list
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

        $this->moreThanLoadTime = [
            'count'    => $moreThanLoadTime,
            'loadTime' => $loadTime,
        ];
    }

    public function getMoreThanLoadTime()
    {
        return $this->moreThanLoadTime;
    }
}
