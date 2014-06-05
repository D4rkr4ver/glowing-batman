<?php

namespace Output;

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
        $array = $object->getAvgLoadTime();
        if ($array['loadtime'] > $value) {
            echo 'blabla';
        }
    }

    public function match($object)
    {
        return get_class($object) === 'Controller\AvgLoadTime';
    }
}
