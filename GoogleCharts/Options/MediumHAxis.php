<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

class MediumHAxis extends HAxis
{
    /**
     * The baseline for the horizontal axis.
     * This option is only supported for a continuous axis.
     *
     * @var int
     */
    protected $baseline;

    /**
     * The color of the baseline for the horizontal axis. Can be any HTML color string, for example: 'red' or '#00cc00'.
     * This option is only supported for a continuous axis.
     *
     * @var string
     */
    protected $baselineColor;

    /**
     * The direction in which the values along the horizontal axis grow. Specify -1 to reverse the order of the values
     * or 1 for normal order.
     *
     * @var int
     */
    protected $direction;

    /**
     * A format string for numeric or date axis labels.
     * For number axis labels, this is a subset of the decimal formatting ICU pattern set . For instance,
     * '#,###%' will display values "1,000%", "750%", and "50%" for values 10, 7.5, and 0.5. You can also
     * supply any of the following :
     *     'none' : displays numbers with no formatting (e.g., 8000000)
     *     'decimal' : displays numbers with thousands separators (e.g., 8,000,000)
     *     'scientific' : displays numbers in scientific notation (e.g., 8e6)
     *     'currency' : displays numbers in the local currency (e.g., $8,000,000.00)
     *     'percent' : displays numbers as percentages (e.g., 800,000,000%)
     *     'short' : displays abbreviated numbers (e.g., 8M)
     *     'long' : displays numbers as full words (e.g., 8 million).
     *
     * For date axis labels, this is a subset of the date formatting ICU pattern set . For instance, 'MMM d, y' will
     * display the value "Jul 1, 2011" for the date of July first in 2011.
     * The actual formatting applied to the label is derived from the locale the API has been loaded with. For more
     * details, see loading charts with a specific locale .
     * This option is only supported for a continuous axis.
     *
     * @var string
     */
    protected $format;

    /**
     * hAxis property that makes the horizontal axis a logarithmic scale (requires all values to be positive).
     * Set to true for yes.
     * This option is only supported for a continuous axis.
     *
     * @var bool
     */
    protected $logScale;

    /**
     *  hAxis property that makes the horizontal axis a logarithmic scale. Can be one of the following:.
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
     * Moves the max value of the horizontal axis to the specified value; this will be rightward in most charts.
     * Ignored if this is set to a value smaller than the maximum x-value of the data. hAxis.viewWindow.max overrides
     * this property.
     * This option is only supported for a continuous axis.
     *
     * @var int
     */
    protected $maxValue;

    /**
     * Moves the min value of the horizontal axis to the specified value; this will be leftward in most charts.
     * Ignored if this is set to a value greater than the minimum x-value of the data. hAxis.viewWindow.min overrides
     * this property.
     * This option is only supported for a continuous axis.
     *
     * @var int
     */
    protected $minValue;

    /**
     * Replaces the automatically generated X-axis ticks with the specified array. Each element of the array should be
     * either a valid tick value (such as a number, date, datetime, or timeofday), or an array. If it's an array, it
     * should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     * [5, 10, 15, 20]
     * [['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four']].
     *
     * This option is only supported for a continuous axis.
     *
     * @var array<mixed>
     */
    protected $ticks;

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
}
