<?php

class TextFormatter implements OutputFormatter
{
    public $classes = array();

    public function __construct()
    {
        $this->classes = array(
            new AvgLoadTimeTextFormatter(),
            new HighestMemUseTextFormatter(),
            new MoreThanLoadTimeTextFormatter(),
            new UpperCase(new AvgLoadTimeTextFormatter()),
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
