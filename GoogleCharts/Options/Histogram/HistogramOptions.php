<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\Histogram;

use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMENGoogleChartsBundle\GoogleCharts\Options\Bar;
use CMENGoogleChartsBundle\GoogleCharts\Options\MediumTooltip;
use CMENGoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * @author Christophe Meneses
 */
class HistogramOptions extends AdvancedChartOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * Where to place the axis titles, compared to the chart area. Supported values :
     * in - Draw the axis titles inside the the chart area.
     * out - Draw the axis titles outside the chart area.
     * none - Omit the axis titles.
     *
     * @var string
     */
    protected $axisTitlesPosition;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * The transparency of data points, with 1.0 being completely opaque and 0.0 fully transparent. In scatter,
     * histogram, bar, and column charts, this refers to the visible data: dots in the scatter chart and rectangles
     * in the others. In charts where selecting data creates a dot, such as the line and area charts, this refers to
     * the circles that appear upon hover or selection. The combo chart exhibits both behaviors, and this option has
     * no effect on other charts.  (To change the opacity of a trendline, see
     * {@link https://developers.google.com/chart/interactive/docs/gallery/trendlines#Example4})
     *
     * @var int
     */
    protected $dataOpacity;

    /**
     *  The type of the entity that receives focus on mouse hover. Also affects which entity is selected by mouse
     * click, and which data table element is associated with events. Can be one of the following :
     * 'datum' - Focus on a single data point. Correlates to a cell in the data table.
     * 'category' - Focus on a grouping of all data points along the major axis. Correlates to a row in the data table.
     *
     * In focusTarget 'category' the tooltip displays all the category values. This may be useful for comparing values
     * of different series.
     *
     * @var string
     */
    protected $focusTarget;

    /**
     * @var HAxis
     */
    protected $hAxis;

    /**
     * @var Histogram
     */
    protected $histogram;

    /**
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     *
     * @var boolean
     */
    protected $interpolateNulls;

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
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart.
     *
     * @var string
     */
    protected $orientation;

    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
     *
     * @var boolean
     */
    protected $reverseCategories;

    /**
     * An array of objects, each describing the format of the corresponding series in the chart. To use default
     * values for a series, specify an empty object {}. If a series or a value is not specified, the global value
     * will be used.
     * Each object supports the following properties :
     * color - The color to use for this series. Specify a valid HTML color string.
     * labelInLegend - The description of the series to appear in the chart legend.
     * targetAxisIndex - Which axis to assign this series to, where 0 is the default axis, and 1 is the opposite axis.
     *   Default value is 0; set to 1 to define a chart where different series are rendered against different axes.
     *   At least one series much be allocated to the default axis. You can define a different scale for different axes.
     * visibleInLegend - A boolean value, where true means that the series should have a legend entry, and false means
     * that it should not. Default is true.
     *
     * You can specify either an array of objects, each of which applies to the series in the order given, or you can
     * specify an object where each child has a numeric key indicating which series it applies to. For example, the
     * following two declarations are identical, and declare the first series as black and absent from the legend,
     * and the fourth as red and absent from the legend :
     * [['color' => 'black', 'visibleInLegend' => false], [], [], ['color' => 'red', 'visibleInLegend' => false]]
     * [0 => ['color' => 'black', 'visibleInLegend' => false], 3 => ['color' => 'red', 'visibleInLegend' => false]
     *
     * @var array
     */
    protected $series;

    /**
     * @var MediumTooltip
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

    /**
     * @var VAxis
     */
    protected $vAxis;


    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bar = new Bar();
        $this->histogram = new Histogram();
        $this->hAxis = new HAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new MediumTooltip();
        $this->vAxis = new VAxis();
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
     * @return Histogram
     */
    public function getHistogram()
    {
        return $this->histogram;
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
     * @return MediumTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return VAxis
     */
    public function getVAxis()
    {
        return $this->vAxis;
    }

    /**
     * @param string $axisTitlesPosition
     */
    public function setAxisTitlesPosition($axisTitlesPosition)
    {
        $this->axisTitlesPosition = $axisTitlesPosition;
    }

    /**
     * @param int $dataOpacity
     */
    public function setDataOpacity($dataOpacity)
    {
        $this->dataOpacity = $dataOpacity;
    }

    /**
     * @param string $focusTarget
     */
    public function setFocusTarget($focusTarget)
    {
        $this->focusTarget = $focusTarget;
    }

    /**
     * @param boolean $interpolateNulls
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;
    }

    /**
     * @param bool|string $isStacked
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @param boolean $reverseCategories
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;
    }

    /**
     * @param array $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @param array $vAxes
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;
    }
}
