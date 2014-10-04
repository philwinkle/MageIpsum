<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RandomSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Random');
    }

    function it_can_generate_random_numbers()
    {
        $this->getInteger()->shouldBeInteger();
    }

}