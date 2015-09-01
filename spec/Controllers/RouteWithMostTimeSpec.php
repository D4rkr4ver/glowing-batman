<?php

namespace spec\Controllers;

use Controllers\RouteWithMostTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RouteWithMostTimeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(RouteWithMostTime::class);
    }
}
