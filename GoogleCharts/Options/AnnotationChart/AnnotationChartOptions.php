<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AllowHtmlTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MaxTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MinTrait;
use DateTime;

/**
 * @author Christophe Meneses
 */
class AnnotationChartOptions implements ChartOptionsInterface
{
    /**
     * A suffix to be added to all values in the legend and tick labels in the vertical axes.
     *
     * @var string
     */
    protected $allValuesSuffix;

    use AllowHtmlTrait;

    /**
     * The width (in percent) of the annotations area, out of the entire chart area. Must be a number in the range 5-80.
     *
     * @var int
     */
    protected $annotationsWidth;

    use ColorsTrait;

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
     * @var bool
     */
    protected $displayAnnotations;

    /**
     * If set to true, the chart will display a filter control to filter annotations. Use this option when there are
     * many annotations.
     *
     * @var bool
     */
    protected $displayAnnotationsFilter;

    /**
     * Whether to display a small bar separator ( | ) between the series values and the date in the legend, where
     * true means yes.
     *
     * @var bool
     */
    protected $displayDateBarSeparator;

    /**
     * Whether to display a shortened, rounded version of the values on the top of the graph, to save space; false
     * indicates that it may. For example, if set to false, 56123.45 might be displayed as 56.12k.
     *
     * @var bool
     */
    protected $displayExactValues;

    /**
     * Whether to display dots next to the values in the legend text, where true means yes.
     *
     * @var bool
     */
    protected $displayLegendDots;

    /**
     * Whether to display the highlighted values in the legend, where true means yes.
     *
     * @var bool
     */
    protected $displayLegendValues;

    /**
     *  Whether to show the zoom range selection area (the area at the bottom of the chart), where false means no.
     *
     * The outline in the zoom selector is a log scale version of the first series in the chart, scaled to fit the
     * height of the zoom selector.
     *
     * @var bool
     */
    protected $displayRangeSelector;

    /**
     * Whether to show the zoom buttons ("1d 5d 1m" and so on), where false means no.
     *
     * @var bool
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

    use MaxTrait;

    use MinTrait;

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
     *
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
        $this->table = new Table();
    }

    public function getTable(): Table
    {
        return $this->table;
    }

    /**
     * @return $this
     */
    public function setAllValuesSuffix(string $allValuesSuffix)
    {
        $this->allValuesSuffix = $allValuesSuffix;

        return $this;
    }

    /**
     * @return $this
     */
    public function setAnnotationsWidth(int $annotationsWidth)
    {
        $this->annotationsWidth = $annotationsWidth;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDateFormat(string $dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayAnnotations(bool $displayAnnotations)
    {
        $this->displayAnnotations = $displayAnnotations;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayAnnotationsFilter(bool $displayAnnotationsFilter)
    {
        $this->displayAnnotationsFilter = $displayAnnotationsFilter;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayDateBarSeparator(bool $displayDateBarSeparator)
    {
        $this->displayDateBarSeparator = $displayDateBarSeparator;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayExactValues(bool $displayExactValues)
    {
        $this->displayExactValues = $displayExactValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayLegendDots(bool $displayLegendDots)
    {
        $this->displayLegendDots = $displayLegendDots;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayLegendValues(bool $displayLegendValues)
    {
        $this->displayLegendValues = $displayLegendValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayRangeSelector(bool $displayRangeSelector)
    {
        $this->displayRangeSelector = $displayRangeSelector;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayZoomButtons(bool $displayZoomButtons)
    {
        $this->displayZoomButtons = $displayZoomButtons;

        return $this;
    }

    /**
     * @return $this
     */
    public function setFill(int $fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLegendPosition(string $legendPosition)
    {
        $this->legendPosition = $legendPosition;

        return $this;
    }

    /**
     * @return $this
     */
    public function setNumberFormats(string $numberFormats)
    {
        $this->numberFormats = $numberFormats;

        return $this;
    }

    /**
     * @param int[] $scaleColumns
     *
     * @return $this
     */
    public function setScaleColumns(array $scaleColumns)
    {
        $this->scaleColumns = $scaleColumns;

        return $this;
    }

    /**
     * @return $this
     */
    public function setScaleFormat(string $scaleFormat)
    {
        $this->scaleFormat = $scaleFormat;

        return $this;
    }

    /**
     * @return $this
     */
    public function setScaleType(string $scaleType)
    {
        $this->scaleType = $scaleType;

        return $this;
    }

    /**
     * @return $this
     */
    public function setZoomStartTime(DateTime $zoomStartTime)
    {
        $this->zoomStartTime = $zoomStartTime;

        return $this;
    }

    /**
     * @return $this
     */
    public function setThickness(int $thickness)
    {
        $this->thickness = $thickness;

        return $this;
    }

    /**
     * @return $this
     */
    public function setZoomEndTime(DateTime $zoomEndTime)
    {
        $this->zoomEndTime = $zoomEndTime;

        return $this;
    }
}
