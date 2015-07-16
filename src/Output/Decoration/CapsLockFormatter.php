<?php

namespace Output\Decoration;

use Output\OutputFormatter;

final class CapsLockFormatter implements OutputFormatter
{
    /**
     * @var OutputFormatter
     */
    public $formatter;

    /**
     * @param OutputFormatter $formatter
     */
    public function __construct(OutputFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Outputs results in uppercase.
     *
     * @param string $object
     *
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
