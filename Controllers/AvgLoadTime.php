<?php

namespace Controllers;

class AvgLoadTime
{
    private $avgLoadTime = array();

    /**
     * Calculates the average load time of all requests that consume more than $memUsage memory
     *
     * @param array $list
     * @param int $memUsage
     */
    public function calculateAvgLoadTime(array $list, $memUsage)
    {
        $count = 0;
        $avgLoadTime = 0;

        foreach ($list as $value) {
            if ($value[1] > $memUsage) {
                $count++;
                $avgLoadTime += $value[0];
            }
        }

        $this->avgLoadTime = array(
            'memory' => $memUsage,
            'count' => $count,
            'loadtime' => $avgLoadTime,
        );
    }

    public function getAvgLoadTime()
    {
        return $this->avgLoadTime;
    }
}
