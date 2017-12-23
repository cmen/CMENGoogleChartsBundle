<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

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
     * @var bool
     */
    protected $criticalPathEnabled;

    /**
     * @var CriticalPathStyle
     */
    protected $criticalPathStyle;

    /**
     * If the start date cannot be computed from the values in the DataTable, the start date will be set to this.
     * Accepts a number, which is the number of milliseconds to use.
     *
     * @var int
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
     * @var bool
     */
    protected $percentEnabled;

    /**
     * @var PercentStyle
     */
    protected $percentStyle;

    /**
     * If set to true, draws a shadow under each task bar which has dependencies.
     *
     * @var bool
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

    /**
     * Gantt constructor.
     */
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
     *
     * @return $this
     */
    public function setBarCornerRadius($barCornerRadius)
    {
        $this->barCornerRadius = $barCornerRadius;

        return $this;
    }

    /**
     * @param int $barHeight
     *
     * @return $this
     */
    public function setBarHeight($barHeight)
    {
        $this->barHeight = $barHeight;

        return $this;
    }

    /**
     * @param bool $criticalPathEnabled
     *
     * @return $this
     */
    public function setCriticalPathEnabled($criticalPathEnabled)
    {
        $this->criticalPathEnabled = $criticalPathEnabled;

        return $this;
    }

    /**
     * @param int $defaultStartDate
     *
     * @return $this
     */
    public function setDefaultStartDate($defaultStartDate)
    {
        $this->defaultStartDate = $defaultStartDate;

        return $this;
    }

    /**
     * @param int $labelMaxWidth
     *
     * @return $this
     */
    public function setLabelMaxWidth($labelMaxWidth)
    {
        $this->labelMaxWidth = $labelMaxWidth;

        return $this;
    }

    /**
     * @param bool $percentEnabled
     *
     * @return $this
     */
    public function setPercentEnabled($percentEnabled)
    {
        $this->percentEnabled = $percentEnabled;

        return $this;
    }

    /**
     * @param bool $shadowEnabled
     *
     * @return $this
     */
    public function setShadowEnabled($shadowEnabled)
    {
        $this->shadowEnabled = $shadowEnabled;

        return $this;
    }

    /**
     * @param string $shadowColor
     *
     * @return $this
     */
    public function setShadowColor($shadowColor)
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    /**
     * @param int $shadowOffset
     *
     * @return $this
     */
    public function setShadowOffset($shadowOffset)
    {
        $this->shadowOffset = $shadowOffset;

        return $this;
    }

    /**
     * @param int $trackHeight
     *
     * @return $this
     */
    public function setTrackHeight($trackHeight)
    {
        $this->trackHeight = $trackHeight;

        return $this;
    }
}
