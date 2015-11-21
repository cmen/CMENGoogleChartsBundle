<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Candlestick;

/**
 * @author Christophe Meneses
 */
class CandlestickChartOptions extends AdvancedChartOptions
{
    /**
     * How multiple data selections are rolled up into tooltips :
     * 'category': Group selected data by x-value.
     * 'series': Group selected data by series.
     * 'auto': Group selected data by x-value if all selections have the same x-value, and by series otherwise.
     * 'none': Show only one tooltip per selection.
     * aggregationTarget will often be used in tandem with selectionMode and tooltip.trigger, e.g.:
     * var options = {
     *     // Allow multiple
     *     // simultaneous selections.
     *     selectionMode: 'multiple',
     *     // Trigger tooltips
     *     // on selections.
     *     tooltip: {trigger: 'selection'},
     *     // Group selections
     *     // by x-value.
     *     aggregationTarget: 'category',
     *};
     *
     * @var string
     */
    protected $aggregationTarget;

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

    /**
     * The type of the entity that receives focus on mouse hover. Also affects which entity is selected by mouse
     * click, and which data table element is associated with events. Can be one of the following :
     * 'datum' - Focus on a single data point. Correlates to a cell in the data table.
     * 'category' - Focus on a grouping of all data points along the major axis. Correlates to a row in the data table.
     * In focusTarget 'category' the tooltip displays all the category values. This may be useful for comparing values
     * of different series.
     *
     * @var string
     */
    protected $focusTarget;

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
     * is a vAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes. The following example assigns series 2 to the right axis and specifies a custom
     * title and text style for it :
     * ['series' => [2 => ['targetAxisIndex' => 1], vAxes => [1 => ['title' => 'Losses',
     * 'textStyle' => ['color' => 'red']]]]
     *
     * This property can be either an object or an array: the object is a collection of objects, each with a numeric
     * label that specifies the axis that it defines--this is the format shown above; the array is an array of objects,
     * one per axis. For example, the following array-style notation is identical to the vAxis object shown above :
     * vAxes: [ [], ['title' => 'Losses', 'textStyle' => ['color' => 'red'] ] ]
     *
     * @var array
     */
    protected $vAxes;


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
     * @param string $aggregationTarget
     *
     * @return CandlestickChartOptions
     */
    public function setAggregationTarget($aggregationTarget)
    {
        $this->aggregationTarget = $aggregationTarget;

        return $this;
    }

    /**
     * @param string $focusTarget
     *
     * @return CandlestickChartOptions
     */
    public function setFocusTarget($focusTarget)
    {
        $this->focusTarget = $focusTarget;

        return $this;
    }

    /**
     * @param string $orientation
     *
     * @return CandlestickChartOptions
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return CandlestickChartOptions
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $selectionMode
     *
     * @return CandlestickChartOptions
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }

    /**
     * @param array $vAxes
     *
     * @return CandlestickChartOptions
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }
}
