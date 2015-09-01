<?php

namespace spec\Controllers;

use Controllers\AvgLoadTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AvgLoadTimeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(AvgLoadTime::class);
    }
}
