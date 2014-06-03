<?php

class MoreThanLoadTimeHtmlFormatter implements OutputFormatter
{
    /**
     * Outputs results to HTML
     *
     * @param $object
     */
    public function output($object)
    {
        $array = $object->getMoreThanLoadTime();
        echo sprintf('<p><bold>%s</bold> requests hebben meer dan <bold>%s</bold> laadtijd nodig</p>', $array['count'], $array['loadtime']);
    }


    public function match($object)
    {
        return get_class($object) === 'MoreThanLoadTime';
    }
}
