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
     * @return $this
     */
    public function setHeaderRow(string $headerRow)
    {
        $this->headerRow = $headerRow;

        return $this;
    }

    /**
     * @return $this
     */
    public function setTableRow(string $tableRow)
    {
        $this->tableRow = $tableRow;

        return $this;
    }

    /**
     * @return $this
     */
    public function setOddTableRow(string $oddTableRow)
    {
        $this->oddTableRow = $oddTableRow;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSelectedTableRow(string $selectedTableRow)
    {
        $this->selectedTableRow = $selectedTableRow;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHoverTableRow(string $hoverTableRow)
    {
        $this->hoverTableRow = $hoverTableRow;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHeaderCell(string $headerCell)
    {
        $this->headerCell = $headerCell;

        return $this;
    }

    /**
     * @return $this
     */
    public function setTableCell(string $tableCell)
    {
        $this->tableCell = $tableCell;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRowNumberCell(string $rowNumberCell)
    {
        $this->rowNumberCell = $rowNumberCell;

        return $this;
    }
}
