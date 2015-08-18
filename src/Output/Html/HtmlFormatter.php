<?php

namespace Output\Html;

use Output\AvgLoadTimeUpperCase;
use Output\OutputFormatter;

final class HtmlFormatter implements OutputFormatter
{
    /**
     * @var OutputFormatter[]
     */
    public $classes = [];

    public function __construct()
    {
        $this->classes = [
            new AvgLoadTimeUpperCase(new AvgLoadTimeHtmlFormatter(), 0.4),
            new AvgLoadTimeHtmlFormatter(),
            new HighestMemUseHtmlFormatter(),
            new MoreThanLoadTimeHtmlFormatter(),
            new MostCalledRouteHtmlFormatter(),
            new RouteWithMostTimeHtmlFormatter(),
        ];
    }

    /**
     * Outputs results to HTML.
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
