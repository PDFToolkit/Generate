<?php

namespace spec\PDFToolkit\Generate;

use PDFToolkit\Generate\PageSize;
use PhpSpec\ObjectBehavior;

class PageSizeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PDFToolkit\Generate\PageSize');
    }

    function it_constructor_is_valid_with_empty_constructor()
    {
        $this->beConstructedWith();
        $this->shouldNotThrow('\Exception')->duringInstantiation();
    }

    function it_constructor_is_valid_with_custom_constructor()
    {
        $this->beConstructedWith(PageSize::A4);
        $this->shouldNotThrow('\Exception')->duringInstantiation();
    }

    function it_constructor_is_invalid()
    {
        $this->beConstructedWith([42.00, 42.00]);
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    function it_return_width_with_default_constructor()
    {
        $this->beConstructedWith();
        $this->getWidth()->shouldReturn(612.00);
    }

    function it_return_height_with_default_constructor()
    {
        $this->beConstructedWith();
        $this->getHeight()->shouldReturn(792.00);
    }

    function it_return_width_for_A4()
    {
        $this->beConstructedWith(PageSize::A4);
        $this->getWidth()->shouldReturn(595.28);
    }

    function it_return_height_for_A4()
    {
        $this->beConstructedWith(PageSize::A4);
        $this->getHeight()->shouldReturn(841.89);
    }
}
