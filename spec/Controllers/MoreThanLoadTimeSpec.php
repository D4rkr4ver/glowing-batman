<?php

namespace spec\Controllers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoreThanLoadTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Controllers\MoreThanLoadTime');
    }
}
