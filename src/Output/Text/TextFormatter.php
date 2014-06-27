<?php

namespace Output\Text;

use Output\OutputFormatter;
use Output\AvgLoadTimeUpperCase;

class TextFormatter implements OutputFormatter
{
    public $classes = array();

    public function __construct()
    {
        $this->classes = array(
            new AvgLoadTimeUpperCase(new AvgLoadTimeTextFormatter(), 0.4),
            new AvgLoadTimeTextFormatter(),
            new HighestMemUseTextFormatter(),
            new MoreThanLoadTimeTextFormatter(),
            new MostCalledRouteTextFormatter(),
            new RouteWithMostTimeTextFormatter(),
        );
    }

    /**
     * Outputs results to plain text
     *
     * @param $object
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
            if ($class->match($object) === true) {
                return true;
            }
        }
    }
}
