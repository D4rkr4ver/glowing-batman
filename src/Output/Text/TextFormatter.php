<?php

namespace Output\Text;

use Output\AvgLoadTimeUpperCase;
use Output\OutputFormatter;

final class TextFormatter implements OutputFormatter
{
    /**
     * @var OutputFormatter[]
     */
    public $classes = [];

    public function __construct()
    {
        $this->classes = [
            new AvgLoadTimeUpperCase(new AvgLoadTimeTextFormatter(), 0.4),
            new AvgLoadTimeTextFormatter(),
            new HighestMemUseTextFormatter(),
            new MoreThanLoadTimeTextFormatter(),
            new MostCalledRouteTextFormatter(),
            new RouteWithMostTimeTextFormatter(),
        ];
    }

    /**
     * Outputs results to plain text.
     *
     * @param $object
     *
     * @return mixed
     */
    public function output($object)
    {
        foreach ($this->classes as $class) {
            if ($class->match($object) === true) {
                return $class->output($object);
            }
        };
    }

    public function match($object)
    {
        foreach ($this->classes as $class) {
            return $class->match($object);
        }
    }
}
