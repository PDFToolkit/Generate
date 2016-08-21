<?php
namespace PDFToolkit\Generate;

use Greg0ire\Enum\AbstractEnum;

/**
 * Encapsulates the width and height of a page and provides standard page sizes.
 */
class PageSize extends AbstractEnum
{
    /**
     * All of these dimensions are in PostScript point.
     */
    const A3 = [841.89, 1190.55];
    const A4 = [595.28, 841.89];
    const A5 = [419.53, 595.28];
    const A6 = [297.64, 419.53];
    const B5 = [498.90, 708.66];
    const EXECUTIVE = [521.86, 756.00];
    const FOLIO = [612.00, 936.00];
    const LEDGER = [1224.00, 792.00];
    const LEGAL = [612.00, 1008.00];
    const LETTER = [612.00, 792.00];
    const STATEMENT = [396.00, 612.00];
    const TABLOID = [792.00, 1224.00];

    /**
     * @var array
     */
    private $pageSize;

    /**
     * Create a new page size with default size (Letter).
     *
     * @param array $pageSize
     *
     * @throws \Exception
     */
    public function __construct($pageSize = self::LETTER)
    {
        if (!PageSize::isValidValue($pageSize)) {
            throw new \Exception('Invalid page size');
        }

        $this->pageSize = $pageSize;
    }

    /**
     * Width in points.
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->pageSize[0];
    }

    /**
     * Height in points.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->pageSize[1];
    }
}
