<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IpsumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ipsum');
    }

    function it_can_generate_text()
    {   
        $this->generate()->shouldStartWith('Mage Ipsum');
    }
}
