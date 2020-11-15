<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;

/**
 * @author Christophe Meneses
 */
class Calendar
{
    /**
     * @var CellColor
     */
    protected $cellColor;

    /**
     * The size of the calendar day squares.
     *
     * @var int
     */
    protected $cellSize;

    /**
     * @var MediumTextStyle
     */
    protected $dayOfWeekLabel;

    /**
     * The distance between the right edge of the week labels and the left edge of the chart day squares.
     *
     * @var int
     */
    protected $dayOfWeekRightSpace;

    /**
     * The single-letter labels to use for Sunday through Saturday.
     *
     * @var string
     */
    protected $daysOfWeek;

    /**
     * @var CellColor
     */
    protected $focusedCellColor;

    /**
     * @var MediumTextStyle
     */
    protected $monthLabel;

    /**
     * @var CellColor
     */
    protected $monthOutlineColor;

    /**
     * The number of pixels between the bottom of the month labels and the top of the day squares.
     *
     * @var int
     */
    protected $underMonthSpace;

    /**
     * The number of pixels between the bottom-most year label and the bottom of the chart.
     *
     * @var int
     */
    protected $underYearSpace;

    /**
     * @var CellColor
     */
    protected $unusedMonthOutlineColor;

    /**
     * @var MediumTextStyle
     */
    protected $yearLabel;

    /**
     * Calendar constructor.
     */
    public function __construct()
    {
        $this->cellColor = new CellColor();
        $this->dayOfWeekLabel = new MediumTextStyle();
        $this->focusedCellColor = new CellColor();
        $this->monthLabel = new MediumTextStyle();
        $this->monthOutlineColor = new CellColor();
        $this->unusedMonthOutlineColor = new CellColor();
        $this->yearLabel = new MediumTextStyle();
    }

    /**
     * @return CellColor
     */
    public function getCellColor()
    {
        return $this->cellColor;
    }

    /**
     * @return MediumTextStyle
     */
    public function getDayOfWeekLabel()
    {
        return $this->dayOfWeekLabel;
    }

    /**
     * @return CellColor
     */
    public function getFocusedCellColor()
    {
        return $this->focusedCellColor;
    }

    /**
     * @return MediumTextStyle
     */
    public function getMonthLabel()
    {
        return $this->monthLabel;
    }

    /**
     * @return CellColor
     */
    public function getMonthOutlineColor()
    {
        return $this->monthOutlineColor;
    }

    /**
     * @return CellColor
     */
    public function getUnusedMonthOutlineColor()
    {
        return $this->unusedMonthOutlineColor;
    }

    /**
     * @return MediumTextStyle
     */
    public function getYearLabel()
    {
        return $this->yearLabel;
    }

    /**
     * @return $this
     */
    public function setCellSize(int $cellSize)
    {
        $this->cellSize = $cellSize;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDayOfWeekRightSpace(int $dayOfWeekRightSpace)
    {
        $this->dayOfWeekRightSpace = $dayOfWeekRightSpace;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDaysOfWeek(string $daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;

        return $this;
    }

    /**
     * @return $this
     */
    public function setUnderMonthSpace(int $underMonthSpace)
    {
        $this->underMonthSpace = $underMonthSpace;

        return $this;
    }

    /**
     * @return $this
     */
    public function setUnderYearSpace(int $underYearSpace)
    {
        $this->underYearSpace = $underYearSpace;

        return $this;
    }
}
