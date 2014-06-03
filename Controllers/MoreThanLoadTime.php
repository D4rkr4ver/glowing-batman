<?php

class MoreThanLoadTime
{
    private $moreThanLoadTime = array();

    /**
     * Calculates the number of requests that require more than $loadtime time
     *
     * @param array $list
     * @param double $loadtime
     */
    public function calculateMoreThanLoadTime(array $list, $loadtime)
    {
        $moreThanLoadTime = 0;

        foreach ($list as $value) {
            if ($value[0] > $loadtime) {
                $moreThanLoadTime++;
            }
        }

        $this->moreThanLoadTime = array(
            'count' => $moreThanLoadTime,
            'loadtime' => $loadtime,
        );
    }

    public function getMoreThanLoadTime()
    {
        return $this->moreThanLoadTime;
    }
}
