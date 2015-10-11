<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;
use DateTime;

/**
 * @author Christophe Meneses
 */
class Gantt
{
    /**
     * @var Arrow
     */
    protected $arrow;

    /**
     * The radius for defining the curve of a bar's corners.
     *
     * @var int
     */
    protected $barCornerRadius;

    /**
     * The height of the bars for tasks.
     *
     * @var int
     */
    protected $barHeight;

    /**
     * If true any arrows on the critical path will be styled differently.
     *
     * @var boolean
     */
    protected $criticalPathEnabled;

    /**
     * @var CriticalPathStyle
     */
    protected $criticalPathStyle;

    /**
     * If the start date cannot be computed from the values in the DataTable, the start date will be set to this.
     * Accepts a date value (YYYY, M, D) or a number, which is the number of milliseconds to use.
     *
     * @var DateTime|int
     */
    protected $defaultStartDate;

    /**
     * @var InnerGridHorizLine
     */
    protected $innerGridHorizLine;

    /**
     * @var InnerGridTrack
     */
    protected $innerGridTrack;

    /**
     * @var InnerGridDarkTrack
     */
    protected $innerGridDarkTrack;

    /**
     * The maximum amount of space allowed for each task label.
     *
     * @var int
     */
    protected $labelMaxWidth;

    /**
     * @var LabelStyle
     */
    protected $labelStyle;

    /**
     * Fills the task bar based on the percentage completed for the task.
     *
     * @var boolean
     */
    protected $percentEnabled;

    /**
     * @var PercentStyle
     */
    protected $percentStyle;

    /**
     * If set to true, draws a shadow under each task bar which has dependencies.
     *
     * @var boolean
     */
    protected $shadowEnabled;

    /**
     * Defines the color of the shadows under any task bar which has dependencies.
     *
     * @var string
     */
    protected $shadowColor;

    /**
     * Defines the offset, in pixels, of the shadows under any task bar which has dependencies.
     *
     * @var int
     */
    protected $shadowOffset;

    /**
     * The height of the tracks.
     *
     * @var int
     */
    protected $trackHeight;


    public function __construct()
    {
        $this->arrow = new Arrow();
        $this->criticalPathStyle = new CriticalPathStyle();
        $this->innerGridHorizLine = new InnerGridHorizLine();
        $this->innerGridTrack = new InnerGridTrack();
        $this->innerGridDarkTrack = new InnerGridDarkTrack();
        $this->labelStyle = new LabelStyle();
        $this->percentStyle = new PercentStyle();
    }


    /**
     * @return Arrow
     */
    public function getArrow()
    {
        return $this->arrow;
    }

    /**
     * @return CriticalPathStyle
     */
    public function getCriticalPathStyle()
    {
        return $this->criticalPathStyle;
    }

    /**
     * @return InnerGridHorizLine
     */
    public function getInnerGridHorizLine()
    {
        return $this->innerGridHorizLine;
    }

    /**
     * @return InnerGridTrack
     */
    public function getInnerGridTrack()
    {
        return $this->innerGridTrack;
    }

    /**
     * @return InnerGridDarkTrack
     */
    public function getInnerGridDarkTrack()
    {
        return $this->innerGridDarkTrack;
    }

    /**
     * @return LabelStyle
     */
    public function getLabelStyle()
    {
        return $this->labelStyle;
    }

    /**
     * @return PercentStyle
     */
    public function getPercentStyle()
    {
        return $this->percentStyle;
    }

    /**
     * @param int $barCornerRadius
     */
    public function setBarCornerRadius($barCornerRadius)
    {
        $this->barCornerRadius = $barCornerRadius;
    }

    /**
     * @param int $barHeight
     */
    public function setBarHeight($barHeight)
    {
        $this->barHeight = $barHeight;
    }

    /**
     * @param boolean $criticalPathEnabled
     */
    public function setCriticalPathEnabled($criticalPathEnabled)
    {
        $this->criticalPathEnabled = $criticalPathEnabled;
    }

    /**
     * @param DateTime|int $defaultStartDate
     */
    public function setDefaultStartDate($defaultStartDate)
    {
        $this->defaultStartDate = $defaultStartDate;
    }

    /**
     * @param int $labelMaxWidth
     */
    public function setLabelMaxWidth($labelMaxWidth)
    {
        $this->labelMaxWidth = $labelMaxWidth;
    }

    /**
     * @param boolean $percentEnabled
     */
    public function setPercentEnabled($percentEnabled)
    {
        $this->percentEnabled = $percentEnabled;
    }

    /**
     * @param boolean $shadowEnabled
     */
    public function setShadowEnabled($shadowEnabled)
    {
        $this->shadowEnabled = $shadowEnabled;
    }

    /**
     * @param string $shadowColor
     */
    public function setShadowColor($shadowColor)
    {
        $this->shadowColor = $shadowColor;
    }

    /**
     * @param int $shadowOffset
     */
    public function setShadowOffset($shadowOffset)
    {
        $this->shadowOffset = $shadowOffset;
    }

    /**
     * @param int $trackHeight
     */
    public function setTrackHeight($trackHeight)
    {
        $this->trackHeight = $trackHeight;
    }
}
