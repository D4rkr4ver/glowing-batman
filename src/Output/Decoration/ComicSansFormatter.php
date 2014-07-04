<?php

namespace Output\Decoration;

use Output\OutputFormatter;

class ComicSansFormatter implements OutputFormatter
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
        return '<style>*{font-family: Comic Sans MS}</style>' . $this->formatter->output($object);
    }

    public function match($object)
    {
        foreach ($this->classes as $class) {
            return $class->match($object);
        }
    }
}
