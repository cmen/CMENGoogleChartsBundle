<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsDraw;
use DateTime;

/**
 * @author Christophe Meneses
 */
class AnnotationChartOptions extends ChartOptionsDraw
{
    /**
     * If set to true, any annotation text that includes HTML tags will be rendered as HTML.
     *
     * @var boolean
     */
    protected $allowHtml;

    /**
     * A suffix to be added to all values in the legend and tick labels in the vertical axes.
     *
     * @var string
     */
    protected $allValuesSuffix;

    /**
     * The width (in percent) of the annotations area, out of the entire chart area. Must be a number in the range 5-80.
     *
     * @var int
     */
    protected $annotationsWidth;

    /**
     * The colors to use for the chart lines and labels. An array of strings. Each element is a string in a valid HTML
     * color format. For example 'red' or '#00cc00'.
     *
     * @var string[]
     */
    protected $colors;

    /**
     * The format used to display the date information in the top right corner. The format of this field is as
     * specified by the java SimpleDateFormat class.
     *
     * @var string
     */
    protected $dateFormat;

    /**
     * If set to false, the chart will hide the annotations table, and the annotations and annotationText will not be
     * visible (the annotations table will also not be displayed if there are no annotations in your data, regardless
     * of this option). When this option is set to true, after every numeric column, two optional annotation string
     * columns can be added, one for the annotation title and one for the annotation text.
     *
     * @var boolean
     */
    protected $displayAnnotations;

    /**
     * If set to true, the chart will display a filter control to filter annotations. Use this option when there are
     * many annotations.
     *
     * @var boolean
     */
    protected $displayAnnotationsFilter;

    /**
     * Whether to display a small bar separator ( | ) between the series values and the date in the legend, where
     * true means yes.
     *
     * @var boolean
     */
    protected $displayDateBarSeparator;

    /**
     * Whether to display a shortened, rounded version of the values on the top of the graph, to save space; false
     * indicates that it may. For example, if set to false, 56123.45 might be displayed as 56.12k.
     *
     * @var boolean
     */
    protected $displayExactValues;

    /**
     * Whether to display dots next to the values in the legend text, where true means yes.
     *
     * @var boolean
     */
    protected $displayLegendDots;

    /**
     * Whether to display the highlighted values in the legend, where true means yes.
     *
     * @var boolean
     */
    protected $displayLegendValues;

    /**
     *  Whether to show the zoom range selection area (the area at the bottom of the chart), where false means no.
     *
     * The outline in the zoom selector is a log scale version of the first series in the chart, scaled to fit the
     * height of the zoom selector.
     *
     * @var boolean
     */
    protected $displayRangeSelector;

    /**
     * Whether to show the zoom buttons ("1d 5d 1m" and so on), where false means no.
     *
     * @var boolean
     */
    protected $displayZoomButtons;

    /**
     * A number from 0—100 (inclusive) specifying the alpha of the fill below each line in the line graph. 100 means
     * 100% opaque, and 0 means no fill at all. The fill color is the same color as the line above it.
     *
     * @var int
     */
    protected $fill;

    /**
     * Whether to put the colored legend on the same row with the zoom buttons and the date ('sameRow'), or on a new
     * row ('newRow').
     *
     * @var string
     */
    protected $legendPosition;

    /**
     * The maximum value to show on the Y axis. If the maximum data point exceeds this value, this setting will be
     * ignored, and the chart will be adjusted to show the next major tick mark above the maximum data point. This
     * will take precedence over the Y axis maximum determined by scaleType.
     *
     * This is similar to maxValue in core charts.
     *
     * @var int
     */
    protected $max;

    /**
     * The minimum value to show on the Y axis. If the minimum data point is less than this value, this setting will
     * be ignored, and the chart will be adjusted to show the next major tick mark below the minimum data point. This
     * will take precedence over the Y axis minimum determined by scaleType.
     *
     * This is similar to minValue in core charts.
     *
     * @var int
     */
    protected $min;

    /**
     * Specifies the number format patterns to be used to format the values at the top of the graph.
     *
     * The patterns should be in the format as specified by the java DecimalFormat class.
     *  - If not specified, the default format pattern is used.
     *  - If a single string pattern is specified, it is used for all of the values.
     *  - If a map is specified, the keys are (zero-based) indexes of series, and the values are the patterns to be
     *      used to format the specified series.
     *
     * You are not required to include a format for every series on the chart; any unspecified series will use the
     * default format.
     *
     * If this option is specified, the displayExactValues option is ignored.
     *
     * @var string
     */
    protected $numberFormats;

    /**
     * Specifies which values to show on the Y axis tick marks in the graph. The default is to have a single scale
     * on the right side, which applies to both series; but you can have different sides of the graph scaled to
     * different series values.
     *
     * This option takes an array of zero to three numbers specifying the (zero-based) index of the series to use as
     * the scale value. Where these values are shown depends on how many values you include in your array :
     * - If you specify an empty array, the chart will not show Y values next to the tick marks.
     * - If you specify one value, the scale of the indicated series will be displayed on the right side of the chart
     *   only.
     * - If you specify two values, a the scale for the second series will be added to the right of the chart.
     * - If you specify three values, a scale for the third series will be added to the middle of the chart.
     * - Any values after the third in the array will be ignored.
     *
     * When displaying more than one scale, it is advisable to set the scaleType option to either 'allfixed' or
     * 'allmaximized'.
     *
     * @var int[]
     */
    protected $scaleColumns;

    /**
     * Number format to be used for the axis tick labels. The default of '#' displays as an integer.
     *
     * @var string
     */
    protected $scaleFormat;

    /**
     * Sets the maximum and minimum values shown on the Y axis. The following options are available :
     * - 'maximized' - The Y axis will span the minimum to the maximum values of the series. If you have more than one
     *   series, use allmaximized.
     * - 'fixed' [default] - The Y axis varies, depending on the data values values:
     *     - If all values are >=0, the Y axis will span from zero to the maximum data value.
     *     - If all values are <=0, the Y axis will span from zero to the minimum data value.
     *     - If values are both positive and negative, the Y axis will range from the series maximum to the series
     *       minimum. For multiple series, use 'allfixed'.
     * - 'allmaximized' - Same as 'maximized,' but used when multiple scales are displayed. Both charts will be
     *   maximized within the same scale, which means that one will be misrepresented against the Y axis, but hovering
     *   over each series will display its true value.
     * - 'allfixed' - Same as 'fixed,' but used when multiple scales are displayed. This setting adjusts each scale
     *   to the series to which it applies (use this in conjunction with scaleColumns).

     * If you specify the min and/or max options, they will take precedence over the minimum and maximum values
     * determined by your scale type.
     *
     * @var string
     */
    protected $scaleType;

    /**
     * @var Table
     */
    protected $table;

    /**
     * A number from 0—10 (inclusive) specifying the thickness of the lines, where 0 is the thinnest.
     *
     * @var int
     */
    protected $thickness;

    /**
     * Sets the end date/time of the selected zoom range.
     *
     * @var DateTime
     */
    protected $zoomEndTime;

    /**
     * Sets the start date/time of the selected zoom range.
     *
     * @var DateTime
     */
    protected $zoomStartTime;


    public function __construct()
    {
        parent::__construct();

        $this->table = new Table();
    }


    /**
     * @return Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param boolean $allowHtml
     *
     * @return AnnotationChartOptions
     */
    public function setAllowHtml($allowHtml)
    {
        $this->allowHtml = $allowHtml;

        return $this;
    }

    /**
     * @param string $allValuesSuffix
     *
     * @return AnnotationChartOptions
     */
    public function setAllValuesSuffix($allValuesSuffix)
    {
        $this->allValuesSuffix = $allValuesSuffix;

        return $this;
    }

    /**
     * @param int $annotationsWidth
     *
     * @return AnnotationChartOptions
     */
    public function setAnnotationsWidth($annotationsWidth)
    {
        $this->annotationsWidth = $annotationsWidth;

        return $this;
    }

    /**
     * @param \string[] $colors
     *
     * @return AnnotationChartOptions
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @param string $dateFormat
     *
     * @return AnnotationChartOptions
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * @param boolean $displayAnnotations
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayAnnotations($displayAnnotations)
    {
        $this->displayAnnotations = $displayAnnotations;

        return $this;
    }

    /**
     * @param boolean $displayAnnotationsFilter
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayAnnotationsFilter($displayAnnotationsFilter)
    {
        $this->displayAnnotationsFilter = $displayAnnotationsFilter;

        return $this;
    }

    /**
     * @param boolean $displayDateBarSeparator
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayDateBarSeparator($displayDateBarSeparator)
    {
        $this->displayDateBarSeparator = $displayDateBarSeparator;

        return $this;
    }

    /**
     * @param boolean $displayExactValues
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayExactValues($displayExactValues)
    {
        $this->displayExactValues = $displayExactValues;

        return $this;
    }

    /**
     * @param boolean $displayLegendDots
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayLegendDots($displayLegendDots)
    {
        $this->displayLegendDots = $displayLegendDots;

        return $this;
    }

    /**
     * @param boolean $displayLegendValues
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayLegendValues($displayLegendValues)
    {
        $this->displayLegendValues = $displayLegendValues;

        return $this;
    }

    /**
     * @param boolean $displayRangeSelector
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayRangeSelector($displayRangeSelector)
    {
        $this->displayRangeSelector = $displayRangeSelector;

        return $this;
    }

    /**
     * @param boolean $displayZoomButtons
     *
     * @return AnnotationChartOptions
     */
    public function setDisplayZoomButtons($displayZoomButtons)
    {
        $this->displayZoomButtons = $displayZoomButtons;

        return $this;
    }

    /**
     * @param int $fill
     *
     * @return AnnotationChartOptions
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * @param string $legendPosition
     *
     * @return AnnotationChartOptions
     */
    public function setLegendPosition($legendPosition)
    {
        $this->legendPosition = $legendPosition;

        return $this;
    }

    /**
     * @param int $max
     *
     * @return AnnotationChartOptions
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param int $min
     *
     * @return AnnotationChartOptions
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param string $numberFormats
     *
     * @return AnnotationChartOptions
     */
    public function setNumberFormats($numberFormats)
    {
        $this->numberFormats = $numberFormats;

        return $this;
    }

    /**
     * @param \int[] $scaleColumns
     *
     * @return AnnotationChartOptions
     */
    public function setScaleColumns($scaleColumns)
    {
        $this->scaleColumns = $scaleColumns;

        return $this;
    }

    /**
     * @param string $scaleFormat
     *
     * @return AnnotationChartOptions
     */
    public function setScaleFormat($scaleFormat)
    {
        $this->scaleFormat = $scaleFormat;

        return $this;
    }

    /**
     * @param string $scaleType
     *
     * @return AnnotationChartOptions
     */
    public function setScaleType($scaleType)
    {
        $this->scaleType = $scaleType;

        return $this;
    }

    /**
     * @param DateTime $zoomStartTime
     *
     * @return AnnotationChartOptions
     */
    public function setZoomStartTime($zoomStartTime)
    {
        $this->zoomStartTime = $zoomStartTime;

        return $this;
    }

    /**
     * @param int $thickness
     *
     * @return AnnotationChartOptions
     */
    public function setThickness($thickness)
    {
        $this->thickness = $thickness;

        return $this;
    }

    /**
     * @param DateTime $zoomEndTime
     *
     * @return AnnotationChartOptions
     */
    public function setZoomEndTime($zoomEndTime)
    {
        $this->zoomEndTime = $zoomEndTime;

        return $this;
    }
}
