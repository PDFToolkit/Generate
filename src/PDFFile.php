<?php
declare(strict_types = 1);

namespace PDFToolkit\Generate;

use PDFToolkit\Generate\Exception\WriteException;

class PDFFile extends \SplFileInfo
{
    public function write(string $render)
    {
        $file = $this->openFile('w+');

        if ($file->fwrite($render) === null) {
            throw new WriteException(sprintf('The file %s could not be written', $file));
        }
    }
}
