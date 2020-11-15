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

    public function getArrow(): Arrow
    {
        return $this->arrow;
    }

    public function getCriticalPathStyle(): CriticalPathStyle
    {
        return $this->criticalPathStyle;
    }

    public function getInnerGridHorizLine(): InnerGridHorizLine
    {
        return $this->innerGridHorizLine;
    }

    public function getInnerGridTrack(): InnerGridTrack
    {
        return $this->innerGridTrack;
    }

    public function getInnerGridDarkTrack(): InnerGridDarkTrack
    {
        return $this->innerGridDarkTrack;
    }

    public function getLabelStyle(): LabelStyle
    {
        return $this->labelStyle;
    }

    public function getPercentStyle(): PercentStyle
    {
        return $this->percentStyle;
    }

    /**
     * @return $this
     */
    public function setBarCornerRadius(int $barCornerRadius)
    {
        $this->barCornerRadius = $barCornerRadius;

        return $this;
    }

    /**
     * @return $this
     */
    public function setBarHeight(int $barHeight)
    {
        $this->barHeight = $barHeight;

        return $this;
    }

    /**
     * @return $this
     */
    public function setCriticalPathEnabled(bool $criticalPathEnabled)
    {
        $this->criticalPathEnabled = $criticalPathEnabled;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDefaultStartDate(int $defaultStartDate)
    {
        $this->defaultStartDate = $defaultStartDate;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLabelMaxWidth(int $labelMaxWidth)
    {
        $this->labelMaxWidth = $labelMaxWidth;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPercentEnabled(bool $percentEnabled)
    {
        $this->percentEnabled = $percentEnabled;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShadowEnabled(bool $shadowEnabled)
    {
        $this->shadowEnabled = $shadowEnabled;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShadowColor(string $shadowColor)
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShadowOffset(int $shadowOffset)
    {
        $this->shadowOffset = $shadowOffset;

        return $this;
    }

    /**
     * @return $this
     */
    public function setTrackHeight(int $trackHeight)
    {
        $this->trackHeight = $trackHeight;

        return $this;
    }
}
