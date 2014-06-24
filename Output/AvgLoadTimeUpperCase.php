<?php

namespace Output;

use Controllers\AvgLoadTime;

class AvgLoadTimeUpperCase implements OutputFormatter
{
    public $formatter;

    public $array = array();

    public function __construct(OutputFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param AvgLoadTime $object
     * @return string
     */
    public function calculateUpperCase(AvgLoadTime $object, $loadtime)
    {
        $this->array = $object->getAvgLoadTime();

        if (is_float($loadtime)) {
            if ($this->array['loadtime'] > $loadtime) {
                $output = strtoupper($this->formatter->output($object));
            } else {
                $output = $this->formatter->output($object);
            }
        } else {
            throw new \InvalidArgumentException(sprintf('"%s" needs to be a float', $loadtime));
        }

        return $output;
    }

    /**
     * Outputs results to uppercase
     *
     * @param AvgLoadTime $object
     * @return string
     */
    public function output($object)
    {
        return $this->calculateUpperCase($object, 0.4);
    }

    public function match($object)
    {
        return $object instanceof AvgLoadTime;
    }
}
