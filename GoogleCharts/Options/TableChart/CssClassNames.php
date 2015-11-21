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
     *
     * @return CssClassNames
     */
    public function setHeaderRow($headerRow)
    {
        $this->headerRow = $headerRow;

        return $this;
    }

    /**
     * @param string $tableRow
     *
     * @return CssClassNames
     */
    public function setTableRow($tableRow)
    {
        $this->tableRow = $tableRow;

        return $this;
    }

    /**
     * @param string $oddTableRow
     *
     * @return CssClassNames
     */
    public function setOddTableRow($oddTableRow)
    {
        $this->oddTableRow = $oddTableRow;

        return $this;
    }

    /**
     * @param string $selectedTableRow
     *
     * @return CssClassNames
     */
    public function setSelectedTableRow($selectedTableRow)
    {
        $this->selectedTableRow = $selectedTableRow;

        return $this;
    }

    /**
     * @param string $hoverTableRow
     *
     * @return CssClassNames
     */
    public function setHoverTableRow($hoverTableRow)
    {
        $this->hoverTableRow = $hoverTableRow;

        return $this;
    }

    /**
     * @param string $headerCell
     *
     * @return CssClassNames
     */
    public function setHeaderCell($headerCell)
    {
        $this->headerCell = $headerCell;

        return $this;
    }

    /**
     * @param string $tableCell
     *
     * @return CssClassNames
     */
    public function setTableCell($tableCell)
    {
        $this->tableCell = $tableCell;

        return $this;
    }

    /**
     * @param string $rowNumberCell
     *
     * @return CssClassNames
     */
    public function setRowNumberCell($rowNumberCell)
    {
        $this->rowNumberCell = $rowNumberCell;

        return $this;
    }
}
