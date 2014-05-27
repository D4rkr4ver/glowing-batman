<?php

class UpperCase implements OutputFormatter
{
    /**
     * Outputs results to uppercase
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

    public function match($object, $value)
    {
        if ($object->getAvgLaadTijd()['laadtijd'] > $value) {

        }
    }
}
