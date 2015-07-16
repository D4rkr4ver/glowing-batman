<?php

namespace Controllers;

final class HighestMemUse
{
    private $highestValue = [];

    /**
     * Calculates time, memory and route of the single request with the highest memory usage.
     *
     * @param array $list
     */
    public function calculateHighestMemUse(array $list)
    {
        $highestValue = null;

        foreach ($list as $value) {
            if ($value[1] > $highestValue[1]) {
                $highestValue = $value;
            }
        }

        $this->highestValue = [
            'loadTime' => $highestValue[0],
            'memory'   => $highestValue[1],
            'route'    => $highestValue[2],
        ];
    }

    public function getHighestMemUse()
    {
        return $this->highestValue;
    }
}
