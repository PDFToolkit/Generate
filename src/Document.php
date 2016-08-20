<?php
declare(strict_types=1);

namespace PDFToolkit\Generate;

/**
 * The Document class is the top-level class in the PDF.
 * It represents an existing or new PDF document.
 */
class Document
{
    /**
     * Dumps the internal stream into a file
     *
     * @param string $filename
     */
    public function save(string $filename)
    {
        $render = <<<PDF
%PDF-1.6
1 0 obj <</Type /Catalog /Pages 2 0 R>>
endobj
2 0 obj <</Type /Pages /Kids [3 0 R] /Count 1>>
endobj
3 0 obj<> /MediaBox [0 0 500 800]>>
endobj
xref
0 4
0000000000 65535 f
0000000010 00000 n
0000000060 00000 n
0000000115 00000 n
trailer <</Size 4/Root 1 0 R>>
startxref
199
%%EOF
PDF;

        $file = new PDFFile($filename);
        $file->write($render);
    }
}
