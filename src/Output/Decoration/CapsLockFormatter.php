<?php

namespace Output\Decoration;

use Output\OutputFormatter;

class CapsLockFormatter implements OutputFormatter
{
    public $formatter;

    public function __construct(OutputFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Outputs results to Comic Sans
     *
     * @param $object
     * @return string
     */
    public function output($object)
    {
        return strtoupper($this->formatter->output($object));
    }

    public function match($object)
    {
        return $this->formatter->match($object);
    }
}
