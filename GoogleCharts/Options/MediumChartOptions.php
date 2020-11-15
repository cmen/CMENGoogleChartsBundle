<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MediumChartOptions extends BasicChartOptions
{
    /**
     * The background color for the main area of the chart. Can be either a simple HTML color string, for example :
     * 'red' or '#00cc00', or a BackgroundColor object.
     *
     * @var string|AdvancedBackgroundColor
     */
    protected $backgroundColor;

    /**
     * An object with members to configure the placement and size of the chart area (where the chart itself is drawn,
     * excluding axis and legends).
     *
     * @var ChartArea
     */
    protected $chartArea;

    use ColorsTrait;

    use FontNameTrait;

    use FontSizeTrait;

    use TitleTrait;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    public function __construct()
    {
        parent::__construct();

        $this->backgroundColor = new AdvancedBackgroundColor();
        $this->chartArea = new ChartArea();
        $this->titleTextStyle = new TitleTextStyle();
    }

    /**
     * @return string|AdvancedBackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function getChartArea(): ChartArea
    {
        return $this->chartArea;
    }

    public function getTitleTextStyle(): TitleTextStyle
    {
        return $this->titleTextStyle;
    }

    /**
     * @return $this
     */
    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
