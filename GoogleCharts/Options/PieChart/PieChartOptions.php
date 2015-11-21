<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FullTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumChartOptions;

/**
 * @author Christophe Meneses
 */
class PieChartOptions extends MediumChartOptions
{
    /**
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     *
     * This is not supported by Area charts with the isStacked: true/'percent'/'relative'/'absolute' option.
     *
     * @var boolean
     */
    protected $interpolateNulls;

    /**
     * If true, displays a three-dimensional chart.
     *
     * @var boolean
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

    /**
     * If true, draws slices counterclockwise. The default is to draw clockwise.
     *
     * @var boolean
     */
    protected $reverseCategories;

    /**
     * An array of array, each describing the format of the corresponding slice in the pie. To use default values
     * for a slice, specify an empty array (i.e., []). If a slice or a value is not specified, the global value will
     * be used. Each object supports the following properties :
     * color - The color to use for this slice. Specify a valid HTML color string.
     * offset - How far to separate the slice from the rest of the pie, from 0.0 (not at all) to 1.0 (the pie's radius).
     * textStyle - Overrides the global pieSliceTextSlice for this slice.
     *
     * You can specify either an array of array, each of which applies to the slice in the order given, or you can
     * specify an object where each child has a numeric key indicating which slice it applies to. For example, the
     * following two declarations are identical, and declare the first slice as black and the fourth as red :
     * [[color => 'black'], [], [], [color => 'red']]
     * [0 => [color => 'black'], 3 => [color => 'red']]
     *
     * @var array
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


    /**
     * @return PieSliceTextStyle
     */
    public function getPieSliceTextStyle()
    {
        return $this->pieSliceTextStyle;
    }

    /**
     * @return FullTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return AdvancedLegend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param boolean $interpolateNulls
     *
     * @return PieChartOptions
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;

        return $this;
    }

    /**
     * @param boolean $is3D
     *
     * @return PieChartOptions
     */
    public function setIs3D($is3D)
    {
        $this->is3D = $is3D;

        return $this;
    }

    /**
     * @param float $pieHole
     *
     * @return PieChartOptions
     */
    public function setPieHole($pieHole)
    {
        $this->pieHole = $pieHole;

        return $this;
    }

    /**
     * @param int $pieStartAngle
     *
     * @return PieChartOptions
     */
    public function setPieStartAngle($pieStartAngle)
    {
        $this->pieStartAngle = $pieStartAngle;

        return $this;
    }

    /**
     * @param string $pieSliceText
     *
     * @return PieChartOptions
     */
    public function setPieSliceText($pieSliceText)
    {
        $this->pieSliceText = $pieSliceText;

        return $this;
    }

    /**
     * @param array $slices
     *
     * @return PieChartOptions
     */
    public function setSlices($slices)
    {
        $this->slices = $slices;

        return $this;
    }

    /**
     * @param float $sliceVisibilityThreshold
     *
     * @return PieChartOptions
     */
    public function setSliceVisibilityThreshold($sliceVisibilityThreshold)
    {
        $this->sliceVisibilityThreshold = $sliceVisibilityThreshold;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return PieChartOptions
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $pieResidueSliceColor
     *
     * @return PieChartOptions
     */
    public function setPieResidueSliceColor($pieResidueSliceColor)
    {
        $this->pieResidueSliceColor = $pieResidueSliceColor;

        return $this;
    }

    /**
     * @param string $pieResidueSliceLabel
     *
     * @return PieChartOptions
     */
    public function setPieResidueSliceLabel($pieResidueSliceLabel)
    {
        $this->pieResidueSliceLabel = $pieResidueSliceLabel;

        return $this;
    }
}
