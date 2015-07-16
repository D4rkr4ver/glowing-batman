<?php

namespace spec\Controllers;

use Controllers\HighestMemUse;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HighestMemUseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(HighestMemUse::class);
    }
}
