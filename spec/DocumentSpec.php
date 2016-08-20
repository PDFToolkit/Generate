<?php

namespace spec\PDFToolkit\Generate;

use PhpSpec\ObjectBehavior;

class DocumentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PDFToolkit\Generate\Document');
    }
}
