<?php

namespace spec\PDFToolkit\Generate;

use PhpSpec\ObjectBehavior;

class PDFFileSpec extends ObjectBehavior
{
    private $filename;

    function let()
    {
        $this->filename = tempnam(sys_get_temp_dir(), 'PDFToolkit');
        $this->beConstructedWith($this->filename);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PDFToolkit\Generate\PDFFile');
    }

    function it_creates_new_files()
    {
        $this->shouldNotThrow('\PDFToolkit\Generate\Exception\WriteException')->duringWrite($this->filename);
    }
}
