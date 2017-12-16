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

    /**
     * MediumChartOptions constructor.
     */
    public function __construct()
    {
        $this->backgroundColor = new AdvancedBackgroundColor();
        $this->chartArea = new ChartArea();
        $this->titleTextStyle = new TitleTextStyle();
    }

    /**
     * @return AdvancedBackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return ChartArea
     */
    public function getChartArea()
    {
        return $this->chartArea;
    }

    /**
     * @return TitleTextStyle
     */
    public function getTitleTextStyle()
    {
        return $this->titleTextStyle;
    }

    /**
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
