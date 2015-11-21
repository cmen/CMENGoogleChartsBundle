<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChartOptions extends AdvancedChartOptions
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
     * The default opacity of the colored area under an area chart series, where 0.0 is fully transparent and 1.0 is
     * fully opaque. To specify opacity for an individual series, set the areaOpacity value in the series property.
     *
     * @var float
     */
    protected $areaOpacity;

    /**
     * If set to true, will connect the steps to form a stepped line. Otherwise, only a top line appears. The default
     * is to connect the steps.
     *
     * @var boolean
     */
    protected $connectSteps;

    /**
     * @var HAxis
     */
    protected $hAxis;

    /**
     *  If set to true, stacks the elements for all series at each domain value. The isStacked option also supports
     * 100% stacking, where the stacks of elements at each domain value are rescaled to add up to 100%.
     *
     * The options for isStacked are:
     * false — elements will not stack. This is the default option.
     * true — stacks elements for all series at each domain value.
     * 'percent' — stacks elements for all series at each domain value and rescales them such that they add up to
     * 100%, with each element's value calculated as a percentage of 100%.
     * 'relative' — stacks elements for all series at each domain value and rescales them such that they add up to 1,
     * with each element's value calculated as a fraction of 1.
     * 'absolute' — functions the same as isStacked: true.
     *
     * For 100% stacking, the calculated value for each element will appear in the tooltip after its actual value.
     * The target axis will default to tick values based on the relative 0-1 scale as fractions of 1 for 'relative',
     * and 0-100% for 'percent' (Note: when using the 'percent' option, the axis/tick values are displayed as
     * percentages, however the actual values are the relative 0-1 scale values. This is because the percentage axis
     * ticks are the result of applying a format of "#.##%" to the relative 0-1 scale values. When using isStacked :
     * 'percent', be sure to specify any ticks/gridlines using the relative 0-1 scale values). You can customize the
     * gridlines/tick values and formatting using the appropriate hAxis/vAxis options.
     * 100% stacking only supports data values of type number, and must have a baseline of zero.
     *
     * @var boolean|string
     */
    protected $isStacked;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * The on-and-off pattern for dashed lines. For instance, [4, 4] will repeat 4-length dashes followed by 4-length
     * gaps, and [5, 1, 3] will repeat a 5-length dash, a 1-length gap, a 3-length dash, a 5-length gap, a 1-length
     * dash, and a 3-length gap. See Dashed Lines for more information.
     *
     * @var int[]
     */
    protected $lineDashStyle;

    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
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
        $this->hAxis = new HAxis();
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
     * @return HAxis
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
     * @return SteppedAreaChartOptions
     */
    public function setAggregationTarget($aggregationTarget)
    {
        $this->aggregationTarget = $aggregationTarget;

        return $this;
    }

    /**
     * @param float $areaOpacity
     *
     * @return SteppedAreaChartOptions
     */
    public function setAreaOpacity($areaOpacity)
    {
        $this->areaOpacity = $areaOpacity;

        return $this;
    }

    /**
     * @param boolean $connectSteps
     *
     * @return SteppedAreaChartOptions
     */
    public function setConnectSteps($connectSteps)
    {
        $this->connectSteps = $connectSteps;

        return $this;
    }

    /**
     * @param bool|string $isStacked
     *
     * @return SteppedAreaChartOptions
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;

        return $this;
    }

    /**
     * @param \int[] $lineDashStyle
     *
     * @return SteppedAreaChartOptions
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return SteppedAreaChartOptions
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $selectionMode
     *
     * @return SteppedAreaChartOptions
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }

    /**
     * @param array $vAxes
     *
     * @return SteppedAreaChartOptions
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }
}
