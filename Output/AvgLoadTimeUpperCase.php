<?php

namespace Output;

use Controllers\AvgLoadTime;

class AvgLoadTimeUpperCase implements OutputFormatter
{
    public $formatter;

    public $loadTime;

    public function __construct(OutputFormatter $formatter, $loadTime)
    {
        $this->formatter = $formatter;
        if (is_float($loadTime)) {
            $this->loadTime = $loadTime;
        } else {
            throw new \InvalidArgumentException(sprintf('"%s" needs to be a float', $loadTime));
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

            return $array['loadTime'] > $this->loadTime;
        }
    }
}
