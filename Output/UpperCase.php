<?php

namespace Randy\Output;

class UpperCase implements OutputFormatter
{

    public $formatter = null;

    public function __construct(OutputFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Outputs results to uppercase
     *
     * @param $object
     */
    public function output($object)
    {

    }

    public function match($object)
    {
        if ($this->formatter->getAvgLoadTime()['laadtijd'] > $value) {
            echo 'blabla';
        }
    }
}
