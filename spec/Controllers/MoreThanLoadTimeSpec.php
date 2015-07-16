<?php

namespace spec\Controllers;

use Controllers\MoreThanLoadTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoreThanLoadTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MoreThanLoadTime::class);
    }
}
