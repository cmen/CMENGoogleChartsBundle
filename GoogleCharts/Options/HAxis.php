<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class HAxis
{
    /**
     * @var Gridlines
     */
    protected $gridlines;

    /**
     * @var MinorGridlines
     */
    protected $minorGridlines;

    /**
     * Position of the horizontal axis text, relative to the chart area. Supported values: 'out', 'in', 'none'.
     *
     * @var string
     */
    protected $textPosition;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    use TitleTrait;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * @var ViewWindow
     */
    protected $viewWindow;

    /**
     * Specifies how to scale the vertical axis to render the values within the chart area. The following string
     * values are supported:
     * 'pretty' - Scale the vertical values so that the maximum and minimum data values are rendered a bit inside the
     *   top and bottom of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'maximized' - Scale the vertical values so that the maximum and minimum data values touch the top and bottom
     *   of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'explicit' - A deprecated option for specifying the top and bottom scale values of the chart area.
     *   (Deprecated because it's redundant with vaxis.viewWindow.min and vaxis.viewWindow.max. Data values outside
     *   these values will be cropped. You must specify a vAxis.viewWindow object describing the maximum and minimum
     *   values to show.
     *
     * @var string
     */
    protected $viewWindowMode;

    public function __construct()
    {
        $this->gridlines = new Gridlines();
        $this->minorGridlines = new MinorGridlines();
        $this->textStyle = new MediumTextStyle();
        $this->titleTextStyle = new TitleTextStyle();
        $this->viewWindow = new ViewWindow();
    }

    public function getGridlines(): Gridlines
    {
        return $this->gridlines;
    }

    public function getMinorGridlines(): MinorGridlines
    {
        return $this->minorGridlines;
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }

    public function getTitleTextStyle(): TitleTextStyle
    {
        return $this->titleTextStyle;
    }

    public function getViewWindow(): ViewWindow
    {
        return $this->viewWindow;
    }

    /**
     * @return $this
     */
    public function setTextPosition(string $textPosition)
    {
        $this->textPosition = $textPosition;

        return $this;
    }

    /**
     * @return $this
     */
    public function setViewWindowMode(string $viewWindowMode)
    {
        $this->viewWindowMode = $viewWindowMode;

        return $this;
    }
}
