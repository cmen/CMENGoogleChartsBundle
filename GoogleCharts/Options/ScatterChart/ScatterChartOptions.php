<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumHAxis;

/**
 * @author Christophe Meneses
 */
class ScatterChartOptions extends AdvancedChartOptions
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
     * @param string $aggregationTarget
     */
    public function setAggregationTarget($aggregationTarget)
    {
        $this->aggregationTarget = $aggregationTarget;
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
     * @param int $lineWidth
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @param string $pointShape
     */
    public function setPointShape($pointShape)
    {
        $this->pointShape = $pointShape;
    }

    /**
     * @param int $pointSize
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;
    }

    /**
     * @param boolean $pointsVisible
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;
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
}
