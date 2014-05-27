<?php

class TextFormatter implements OutputFormatter
{
    public $classes = array();

    public function __construct()
    {
        $this->classes = array(
            new AvgLaadTijdTextFormatter(),
            new HoogsteMemUseTextFormatter(),
            new MeerDanLaadTijdTextFormatter(),
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
}
