<?php

namespace spec\Controllers;

use Controllers\MostCalledRoute;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MostCalledRouteSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(MostCalledRoute::class);
    }
}
