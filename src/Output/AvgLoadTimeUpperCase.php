<?php

namespace Output;

use Controllers\AvgLoadTime;

final class AvgLoadTimeUpperCase implements OutputFormatter
{
    /**
     * @var OutputFormatter
     */
    public $formatter;

    /**
     * @var float
     */
    public $loadTime;

    /**
     * @param OutputFormatter $formatter
     * @param float           $loadTime
     */
    public function __construct(OutputFormatter $formatter, $loadTime)
    {
        $this->formatter = $formatter;

        if (!is_float($loadTime)) {
            throw new \InvalidArgumentException(sprintf('"%s" needs to be a float', $loadTime));
        }

        $this->loadTime = $loadTime;
    }

    /**
     * Outputs results to uppercase
     *
     * @param AvgLoadTime $object
     *
     * @return string
     */
    public function output($object)
    {
        return strtoupper($this->formatter->output($object));
    }

    /**
     * @param AvgLoadTime $object
     *
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
