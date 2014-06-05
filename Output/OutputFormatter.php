<?php

namespace Randy\Output;


interface OutputFormatter
{
    public function output($object);

    public function match($object);
}
