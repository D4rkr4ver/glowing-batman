<?php

namespace Output;

use Controllers\AvgLoadTime;

class AvgLoadTimeUpperCase implements OutputFormatter
{
    public $formatter;

    public $loadtime;

    public function __construct(OutputFormatter $formatter, $loadtime)
    {
        $this->formatter = $formatter;
        if (is_float($loadtime)) {
            $this->loadtime = $loadtime;
        } else {
            throw new \InvalidArgumentException(sprintf('"%s" needs to be a float', $loadtime));
        }
    }

    /**
     * Outputs results to uppercase
     *
     * @param AvgLoadTime $object
     * @return string
     */
    public function output($object)
    {
        return strtoupper($this->formatter->output($object));
    }

    /**
     * @param AvgLoadTime $object
     * @return bool
     */
    public function match($object)
    {
        if ($object instanceof AvgLoadTime) {
            $array = $object->getAvgLoadTime();

            if ($array['loadtime'] > $this->loadtime) {
                return true;
            }
        }
    }
}
