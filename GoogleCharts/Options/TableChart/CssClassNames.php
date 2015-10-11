<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\TableChart;

/**
 * @author Christophe Meneses
 */
class CssClassNames
{
    /**
     * Assigns a class name to the table header row (<tr> element).
     *
     * @var string
     */
    protected $headerRow;

    /**
     * Assigns a class name to the non-header rows (<tr> elements).
     *
     * @var string
     */
    protected $tableRow;

    /**
     * Assigns a class name to odd table rows (<tr> elements). Note: the alternatingRowStyle option must be set to true.
     *
     * @var string
     */
    protected $oddTableRow;

    /**
     * Assigns a class name to the selected table row (<tr> element).
     *
     * @var string
     */
    protected $selectedTableRow;

    /**
     * Assigns a class name to the hovered table row (<tr> element).
     *
     * @var string
     */
    protected $hoverTableRow;

    /**
     * Assigns a class name to all cells in the header row (<td> element).
     *
     * @var string
     */
    protected $headerCell;

    /**
     * Assigns a class name to all non-header table cells (<td> element).
     *
     * @var string
     */
    protected $tableCell;

    /**
     * Assigns a class name to the cells in the row number column (<td> element). Note: the showRowNumber option must
     * be set to true.
     *
     * @var string
     */
    protected $rowNumberCell;


    /**
     * @param string $headerRow
     */
    public function setHeaderRow($headerRow)
    {
        $this->headerRow = $headerRow;
    }

    /**
     * @param string $tableRow
     */
    public function setTableRow($tableRow)
    {
        $this->tableRow = $tableRow;
    }

    /**
     * @param string $oddTableRow
     */
    public function setOddTableRow($oddTableRow)
    {
        $this->oddTableRow = $oddTableRow;
    }

    /**
     * @param string $selectedTableRow
     */
    public function setSelectedTableRow($selectedTableRow)
    {
        $this->selectedTableRow = $selectedTableRow;
    }

    /**
     * @param string $hoverTableRow
     */
    public function setHoverTableRow($hoverTableRow)
    {
        $this->hoverTableRow = $hoverTableRow;
    }

    /**
     * @param string $headerCell
     */
    public function setHeaderCell($headerCell)
    {
        $this->headerCell = $headerCell;
    }

    /**
     * @param string $tableCell
     */
    public function setTableCell($tableCell)
    {
        $this->tableCell = $tableCell;
    }

    /**
     * @param string $rowNumberCell
     */
    public function setRowNumberCell($rowNumberCell)
    {
        $this->rowNumberCell = $rowNumberCell;
    }
}
