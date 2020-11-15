<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class VAxis
{
    /**
     * vAxis property that specifies the baseline for the vertical axis. If the baseline is larger than the highest
     * grid line or smaller than the lowest grid line, it will be rounded to the closest gridline.
     *
     * @var int
     */
    protected $baseline;

    /**
     * Specifies the color of the baseline for the vertical axis. Can be any HTML color string,
     * for example: 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $baselineColor;

    /**
     * The direction in which the values along the vertical axis grow. Specify -1 to reverse the order of the values.
     * Default : 1.
     *
     * @var int
     */
    protected $direction;

    /**
     * A format string for numeric axis labels. This is a subset of the ICU pattern set . For instance,
     * '#,###%' will display values "1,000%", "750%", and "50%" for values 10, 7.5, and 0.5. You can also
     * supply any of the following :
     * 'none' : displays numbers with no formatting (e.g., 8000000)
     * 'decimal' : displays numbers with thousands separators (e.g., 8,000,000)
     * 'scientific' : displays numbers in scientific notation (e.g., 8e6)
     * 'currency' : displays numbers in the local currency (e.g., $8,000,000.00)
     * 'percent' : displays numbers as percentages (e.g., 800,000,000%)
     * 'short' : displays abbreviated numbers (e.g., 8M)
     * 'long' : displays numbers as full words (e.g., 8 million).
     *
     * The actual formatting applied to the label is derived from the locale the API has been loaded with.
     * For more details, see loading charts with a specific locale.
     *
     * @var string
     */
    protected $format;

    /**
     * @var Gridlines
     */
    protected $gridlines;

    /**
     * @var MinorGridlines
     */
    protected $minorGridlines;

    /**
     * If true, makes the vertical axis a logarithmic scale. Note : All values must be positive.
     *
     * @var bool
     */
    protected $logScale;

    /**
     *  vAxis property that makes the vertical axis a logarithmic scale. Can be one of the following:.
     *
     * - null : No logarithmic scaling is performed.
     * - 'log' : Logarithmic scaling. Negative and zero values are not plotted. This option is the same as setting
     *     hAxis: { logscale: true }.
     * - 'mirrorLog' : Logarithmic scaling in which negative and zero values are plotted. The plotted value of a
     *     negative number is the negative of the log of the absolute value. Values close to 0 are plotted on a
     *     linear scale.
     *
     * This option is only supported for a continuous axis.
     *
     * @var string
     */
    protected $scaleType;

    /**
     * Position of the vertical axis text, relative to the chart area. Supported values: 'out', 'in', 'none'.
     *
     * @var string
     */
    protected $textPosition;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    /**
     * Replaces the automatically generated Y-axis ticks with the specified array. Each element of the array should
     * be either a valid tick value (such as a number, date, datetime, or timeofday), or an array. If it's an array,
     * it should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     * [5,10,15,20]
     * [ ['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four'] ] ]
     * [16, ['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four'], 128] ].
     *
     * @var array<mixed>
     */
    protected $ticks;

    use TitleTrait;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * Moves the max value of the vertical axis to the specified value; this will be upward in most charts.
     * Ignored if this is set to a value smaller than the maximum y-value of the data. vAxis.viewWindow.max
     * overrides this property.
     *
     * @var int
     */
    protected $maxValue;

    /**
     * Moves the min value of the vertical axis to the specified value; this will be downward in most charts.
     * Ignored if this is set to a value greater than the minimum y-value of the data. vAxis.viewWindow.min
     * overrides this property.
     *
     * @var int
     */
    protected $minValue;

    /**
     * Specifies how to scale the vertical axis to render the values within the chart area. The following string
     * values are supported:
     * 'pretty' - Scale the vertical values so that the maximum and minimum data values are rendered a bit inside the
     *   top and bottom of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'maximized' - Scale the vertical values so that the maximum and minimum data values touch the top and bottom
     *   of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'explicit' - A deprecated option for specifying the top and bottom scale values of the chart area.
     *   (Deprecated because it's redundant with vaxis.viewWindow.min and vaxis.viewWindow.max. Data values outside
     *   these values will be cropped. You must specify a vAxis.viewWindow object describing the maximum and minimum
     *   values to show.
     *
     * @var string
     */
    protected $viewWindowMode;

    /**
     * @var ViewWindow
     */
    protected $viewWindow;

    public function __construct()
    {
        $this->gridlines = new Gridlines();
        $this->minorGridlines = new MinorGridlines();
        $this->titleTextStyle = new TitleTextStyle();
        $this->viewWindow = new ViewWindow();
        $this->textStyle = new MediumTextStyle();
    }

    public function getGridlines(): Gridlines
    {
        return $this->gridlines;
    }

    public function getMinorGridlines(): MinorGridlines
    {
        return $this->minorGridlines;
    }

    public function getTitleTextStyle(): TitleTextStyle
    {
        return $this->titleTextStyle;
    }

    public function getViewWindow(): ViewWindow
    {
        return $this->viewWindow;
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }

    /**
     * @return $this
     */
    public function setBaseline(int $baseline)
    {
        $this->baseline = $baseline;

        return $this;
    }

    /**
     * @return $this
     */
    public function setBaselineColor(string $baselineColor)
    {
        $this->baselineColor = $baselineColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDirection(int $direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return $this
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLogScale(bool $logScale)
    {
        $this->logScale = $logScale;

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
    public function setTextPosition(string $textPosition)
    {
        $this->textPosition = $textPosition;

        return $this;
    }

    /**
     * @param array<mixed> $ticks
     *
     * @return $this
     */
    public function setTicks(array $ticks)
    {
        $this->ticks = $ticks;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxValue(int $maxValue)
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinValue(int $minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function setViewWindowMode(string $viewWindowMode)
    {
        $this->viewWindowMode = $viewWindowMode;

        return $this;
    }
}
