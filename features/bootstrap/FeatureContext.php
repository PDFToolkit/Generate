<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use PDFToolkit\Generate\Document;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /** @var Document */
    private $document;

    /** @var string */
    private $filename;

    /**
     * @Given a blank document
     */
    public function aBlankDocument()
    {
        $this->document = new Document();
    }

    /**
     * @When I save the document named :filename
     */
    public function iSaveTheDocumentNamedTestPdf($filename)
    {
        $this->filename = tempnam(sys_get_temp_dir(), $filename);
        $this->document->save($this->filename);
    }

    /**
     * @Then I should have a PDF document
     */
    public function iShouldHaveAPDFDocument()
    {
        expect(file_exists($this->filename))->toBe(true);
        expect(unlink($this->filename))->toBe(true);
    }
}
