<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AggregationTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;

/**
 * @author Christophe Meneses
 */
class ScatterChartOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Annotations
     */
    protected $annotations;

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
     * no effect on other charts. (To change the opacity of a trendline, see
     * {@link https://developers.google.com/chart/interactive/docs/gallery/trendlines#Example4})
     *
     * @var float
     */
    protected $dataOpacity;

    /**
     * @var Explorer
     */
    protected $explorer;

    /**
     * @var MediumHAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * Line width in pixels. Use zero to hide all lines and show only the points.
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart so that (for instance) a
     * column chart becomes a bar chart, and an area chart grows rightward.
     *
     * @var string
     */
    protected $orientation;

    /**
     * The shape of individual data elements: 'circle', 'triangle', 'square', 'diamond', 'star', or 'polygon'.
     *
     * @var string
     */
    protected $pointShape;

    /**
     * Diameter of displayed points in pixels. Use zero to hide all points. You can override values for individual
     * series using the series property. If you're using a trendline, the pointSize option will affect the width of
     * the trendline unless you override it with the trendlines.n.pointsize option.
     *
     * @var int
     */
    protected $pointSize;

    /**
     *  Determines whether points will be displayed. Set to false to hide all points. You can override values for
     * individual series using the series property. If you're using a trendline, the pointsVisible option will affect
     * the visibility of the points on all trendlines unless you override it with the trendlines.n.pointsVisible option.
     *
     * This can also be overridden using the style role in the form of "point {visible: true}".
     *
     * @var boolean
     */
    protected $pointsVisible;

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
     * Displays trendlines on the charts that support them. By default, linear trendlines are used, but this can be
     * customized with the trendlines.n.type option.
     *
     * @var Trendlines[]
     */
    protected $trendlines;


    /**
     * ScatterChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->annotations = new Annotations();
        $this->crosshair = new Crosshair();
        $this->explorer = new Explorer();
        $this->hAxis = new MediumHAxis();
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
     * @return MediumHAxis
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
     * @param string $curveType
     *
     * @return $this
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;

        return $this;
    }

    /**
     * @param float $dataOpacity
     *
     * @return $this
     */
    public function setDataOpacity($dataOpacity)
    {
        $this->dataOpacity = $dataOpacity;

        return $this;
    }

    /**
     * @param int $lineWidth
     *
     * @return $this
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }

    /**
     * @param string $orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param string $pointShape
     *
     * @return $this
     */
    public function setPointShape($pointShape)
    {
        $this->pointShape = $pointShape;

        return $this;
    }

    /**
     * @param int $pointSize
     *
     * @return $this
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;

        return $this;
    }

    /**
     * @param boolean $pointsVisible
     *
     * @return $this
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;

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
     * @param Trendlines[] $trendlines
     *
     * @return $this
     */
    public function setTrendlines($trendlines)
    {
        $this->trendlines = $trendlines;

        return $this;
    }
}
