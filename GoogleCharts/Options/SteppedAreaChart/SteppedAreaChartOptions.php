<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AggregationTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChartOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    use AreaOpacityTrait;

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
     * is a VAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes.
     *
     * @var VAxis[]
     */
    protected $vAxes;


    /**
     * SteppedAreaChartOptions constructor.
     */
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
     * @param boolean $connectSteps
     *
     * @return $this
     */
    public function setConnectSteps($connectSteps)
    {
        $this->connectSteps = $connectSteps;

        return $this;
    }

    /**
     * @param bool|string $isStacked
     *
     * @return $this
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;

        return $this;
    }

    /**
     * @param \int[] $lineDashStyle
     *
     * @return $this
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

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
