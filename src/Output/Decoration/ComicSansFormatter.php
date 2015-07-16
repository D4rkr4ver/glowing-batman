<?php

namespace Output\Decoration;

use Output\OutputFormatter;

final class ComicSansFormatter implements OutputFormatter
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
     * Outputs results to Comic Sans, or the generic font sans-serif.
     *
     * @param string $object
     *
     * @return string
     */
    public function output($object)
    {
        return '<span style="font-family: Comic Sans MS, sans-serif">' . $this->formatter->output($object) . '</span>';
    }

    public function match($object)
    {
        return $this->formatter->match($object);
    }
}
