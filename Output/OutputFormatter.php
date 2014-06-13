<?php

namespace Output;


interface OutputFormatter
{
    public function output($object);

    public function match($object);
}
