<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FullTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\InterpolateNullsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;

/**
 * @author Christophe Meneses
 */
class PieChartOptions extends MediumChartOptions
{
    use InterpolateNullsTrait;

    /**
     * If true, displays a three-dimensional chart.
     *
     * @var bool
     */
    protected $is3D;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * If between 0 and 1, displays a donut chart. The hole with have a radius equal to number times the radius of the
     * chart.
     *
     * @var float
     */
    protected $pieHole;

    /**
     * Color for the combination slice that holds all slices below sliceVisibilityThreshold.
     *
     * @var string
     */
    protected $pieResidueSliceColor;

    /**
     * A label for the combination slice that holds all slices below sliceVisibilityThreshold.
     *
     * @var string
     */
    protected $pieResidueSliceLabel;

    /**
     * The content of the text displayed on the slice. Can be one of the following :
     * 'percentage' - The percentage of the slice size out of the total.
     * 'value' - The quantitative value of the slice.
     * 'label' - The name of the slice.
     * 'none' - No text is displayed.
     *
     * @var string
     */
    protected $pieSliceText;

    /**
     * An object that specifies the slice text style.
     *
     * @var PieSliceTextStyle
     */
    protected $pieSliceTextStyle;

    /**
     * The angle, in degrees, to rotate the chart by. The default of 0 will orient the leftmost edge of the first
     * slice directly up.
     *
     * @var int
     */
    protected $pieStartAngle;

    use ReverseCategoriesTrait;

    /**
     * An array of Slice object, each describing the format of the corresponding slice in the pie. To use default values
     * for a slice, specify a null value. If a slice or a value is not specified, the global value will be used.
     *
     * You can specify either an array of Slice object, each of which applies to the slice in the order given, or you
     * can specify an array where each child has a numeric key indicating which slice it applies to. For example, the
     * following two declarations are identical :
     * [$slice1, null, $slice2]
     * [0 => $slice1, 2 => $slice2]
     *
     * @var PieSlice[]
     */
    protected $slices;

    /**
     * The fractional value of the pie, below which a slice will not show individually. All slices that have not
     * passed this threshold will be combined to a single "Other" slice, whose size is the sum of all their sizes.
     * Default is not to show individually any slice which is smaller than half a degree.
     *
     * @var float
     */
    protected $sliceVisibilityThreshold;

    /**
     * @var FullTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->legend = new AdvancedLegend();
        $this->pieSliceTextStyle = new PieSliceTextStyle();
        $this->tooltip = new FullTooltip();
    }

    public function getPieSliceTextStyle(): PieSliceTextStyle
    {
        return $this->pieSliceTextStyle;
    }

    public function getTooltip(): FullTooltip
    {
        return $this->tooltip;
    }

    public function getLegend(): AdvancedLegend
    {
        return $this->legend;
    }

    /**
     * @return $this
     */
    public function setIs3D(bool $is3D)
    {
        $this->is3D = $is3D;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPieHole(float $pieHole)
    {
        $this->pieHole = $pieHole;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPieStartAngle(int $pieStartAngle)
    {
        $this->pieStartAngle = $pieStartAngle;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPieSliceText(string $pieSliceText)
    {
        $this->pieSliceText = $pieSliceText;

        return $this;
    }

    /**
     * @param PieSlice[] $slices
     *
     * @return $this
     */
    public function setSlices(array $slices)
    {
        $this->slices = $slices;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSliceVisibilityThreshold(float $sliceVisibilityThreshold)
    {
        $this->sliceVisibilityThreshold = $sliceVisibilityThreshold;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPieResidueSliceColor(string $pieResidueSliceColor)
    {
        $this->pieResidueSliceColor = $pieResidueSliceColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPieResidueSliceLabel(string $pieResidueSliceLabel)
    {
        $this->pieResidueSliceLabel = $pieResidueSliceLabel;

        return $this;
    }
}
