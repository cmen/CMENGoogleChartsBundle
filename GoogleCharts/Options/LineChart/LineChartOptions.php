<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\LineChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMENGoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMENGoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMENGoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMENGoogleChartsBundle\GoogleCharts\Options\LineOptions;

/**
 * @author Christophe Meneses
 */
class LineChartOptions extends LineOptions
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
     * @var Annotations
     */
    protected $annotations;

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
     * @var Crosshair
     */
    protected $crosshair;

    /**
     * Controls the curve of the lines when the line width is not zero. Can be one of the following:
     * 'none' - Straight lines without curve.
     * 'function' - The angles of the line will be smoothed.
     *
     * @var string
     */
    protected $curveType;

    /**
     * The transparency of data points, with 1.0 being completely opaque and 0.0 fully transparent. In scatter,
     * histogram, bar, and column charts, this refers to the visible data: dots in the scatter chart and rectangles
     * in the others. In charts where selecting data creates a dot, such as the line and area charts, this refers to
     * the circles that appear upon hover or selection. The combo chart exhibits both behaviors, and this option has
     * no effect on other charts.
     *
     * @var float
     */
    protected $dataOpacity;

    /**
     * @var Explorer
     */
    protected $explorer;

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
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     *
     * @var int boolean
     */
    protected $interpolateNulls;

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
     * Displays trendlines on the charts that support them. By default, linear trendlines are used, but this can be
     * customized with the trendlines.n.type option. Trendlines are specified on a per-series basis, so most of the
     * time your options will look like this :
     * var options = {
     *    trendlines: {
     *        0: {
     *            type: 'linear',
     *            color: 'green',
     *            labelInLegend: 'label',
     *            lineWidth: 3,
     *            opacity: 0.3,
     *            pointSize: 1,
     *            pointsVisible : true,
     *            showR2: true,
     *            visibleInLegend: true
     *          }
     *       }
     *    }
     *
     * @var array
     */
    protected $trendlines;

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
        $this->annotations = new Annotations();
        $this->crosshair = new Crosshair();
        $this->explorer = new Explorer();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new AdvancedLegend();
    }


    /**
     * @return AdvancedAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return Annotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @return Crosshair
     */
    public function getCrosshair()
    {
        return $this->crosshair;
    }

    /**
     * @return Explorer
     */
    public function getExplorer()
    {
        return $this->explorer;
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
     * @param string $aggregationTarget
     */
    public function setAggregationTarget($aggregationTarget)
    {
        $this->aggregationTarget = $aggregationTarget;
    }

    /**
     * @param string $axisTitlesPosition
     */
    public function setAxisTitlesPosition($axisTitlesPosition)
    {
        $this->axisTitlesPosition = $axisTitlesPosition;
    }

    /**
     * @param string $curveType
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;
    }

    /**
     * @param float $dataOpacity
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
     * @param int $interpolateNulls
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;
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
     * @param string $selectionMode
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;
    }

    /**
     * @param array $trendlines
     */
    public function setTrendlines($trendlines)
    {
        $this->trendlines = $trendlines;
    }

    /**
     * @param array $vAxes
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;
    }
}
