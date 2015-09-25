<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\PieCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\Options;

class PieChartOptions extends Options
{
    /**
     * If true, displays a three-dimensional chart.
     *
     * @var boolean
     */
    protected $is3D;

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
     * slices: [[color => 'black'], [], [], [color => 'red']]
     * slices: [0 => [color => 'black'], 3: [color => 'red']]
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


    public function __construct()
    {
        parent::__construct();

        $this->pieSliceTextStyle = new PieSliceTextStyle();
    }


    /**
     * @return PieSliceTextStyle
     */
    public function getPieSliceTextStyle()
    {
        return $this->pieSliceTextStyle;
    }

    /**
     * @param boolean $is3D
     */
    public function setIs3D($is3D)
    {
        $this->is3D = $is3D;
    }

    /**
     * @param float $pieHole
     */
    public function setPieHole($pieHole)
    {
        $this->pieHole = $pieHole;
    }

    /**
     * @param int $pieStartAngle
     */
    public function setPieStartAngle($pieStartAngle)
    {
        $this->pieStartAngle = $pieStartAngle;
    }

    /**
     * @param string $pieSliceText
     */
    public function setPieSliceText($pieSliceText)
    {
        $this->pieSliceText = $pieSliceText;
    }

    /**
     * @param array $slices
     */
    public function setSlices($slices)
    {
        $this->slices = $slices;
    }

    /**
     * @param float $sliceVisibilityThreshold
     */
    public function setSliceVisibilityThreshold($sliceVisibilityThreshold)
    {
        $this->sliceVisibilityThreshold = $sliceVisibilityThreshold;
    }

    /**
     * @param boolean $reverseCategories
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;
    }

    /**
     * @param string $pieResidueSliceColor
     */
    public function setPieResidueSliceColor($pieResidueSliceColor)
    {
        $this->pieResidueSliceColor = $pieResidueSliceColor;
    }

    /**
     * @param string $pieResidueSliceLabel
     */
    public function setPieResidueSliceLabel($pieResidueSliceLabel)
    {
        $this->pieResidueSliceLabel = $pieResidueSliceLabel;
    }
}
