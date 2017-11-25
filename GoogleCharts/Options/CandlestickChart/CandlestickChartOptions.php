<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AggregationTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Candlestick;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * @author Christophe Meneses
 */
class CandlestickChartOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var Candlestick
     */
    protected $candlestick;

    use FocusTargetTrait;

    /**
     * @var AdvancedHAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart so that (for instance) a
     * column chart becomes a bar chart, and an area chart grows rightward.
     *
     * @var string
     */
    protected $orientation;

    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
     *
     * This option is only supported for a discrete major axis.
     *
     * @var boolean
     */
    protected $reverseCategories;

    /**
     * When selectionMode is 'multiple', users may select multiple data points.
     *
     * @var string
     */
    protected $selectionMode;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;

    /**
     * Specifies properties for individual vertical axes, if the chart has multiple vertical axes. Each child object
     * is a VAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes.
     *
     * @var VAxis[]
     */
    protected $vAxes;


    /**
     * CandlestickChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bar = new Bar();
        $this->candlestick = new Candlestick();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new AdvancedTooltip();
    }


    /**
     * @return AdvancedAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return Bar
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @return Candlestick
     */
    public function getCandlestick()
    {
        return $this->candlestick;
    }

    /**
     * @return AdvancedHAxis
     */
    public function getHAxis()
    {
        return $this->hAxis;
    }

    /**
     * @return AdvancedLegend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return AdvancedTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param string $orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return $this
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $selectionMode
     *
     * @return $this
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }

    /**
     * @param VAxis[] $vAxes
     *
     * @return $this
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }
}
