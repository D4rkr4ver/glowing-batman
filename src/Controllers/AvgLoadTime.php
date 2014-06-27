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
        $loadTime = 0;

        foreach ($list as $value) {
            if ($value[1] > $memUsage) {
                $count++;
                $loadTime += $value[0];
            }
        }

        $avgLoadTime = $count === 0 ? $loadTime : $loadTime / $count;

        $this->avgLoadTime = array(
            'memory' => $memUsage,
            'count' => $count,
            'loadTime' => round($loadTime, 2),
            'avgLoadTime' => round($avgLoadTime, 2),
        );
    }

    public function getAvgLoadTime()
    {
        return $this->avgLoadTime;
    }
}
