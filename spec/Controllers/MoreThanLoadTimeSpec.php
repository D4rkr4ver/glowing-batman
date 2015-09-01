<?php

namespace spec\Controllers;

use Controllers\MoreThanLoadTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoreThanLoadTimeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(MoreThanLoadTime::class);
    }
}
