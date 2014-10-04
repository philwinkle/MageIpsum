<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DictionarySpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Dictionary');
    }

    function it_has_loaded_dictionary()
    {
    	$this->getData()->shouldBeArray();
    }

    function it_can_output_paragraph()
    {
    	$this->getParagraph()->shouldBeString();
    }

}