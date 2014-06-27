<?php

namespace spec\Controllers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AvgLoadTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Controllers\AvgLoadTime');
    }
}
