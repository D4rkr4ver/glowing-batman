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
        var_dump($object);
        var_dump(get_class($object) === 'AvgLoadTime');
    }
}
