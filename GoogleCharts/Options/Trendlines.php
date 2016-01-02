<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Trendlines
{
    /**
     * The color of the trendline , expressed as either an English color name or a hex string.
     *
     * @var string
     */
    protected $color;

    /**
     * For trendlines of type: 'polynomial', the degree of the polynomial (2 for quadratic, 3 for cubic, and so on).
     * (The default degree may change from 3 to 2 in an upcoming release of Google Charts.)
     *
     * @var int
     */
    protected $degree;

    /**
     * If set, the trendline will appear in the legend as this string.
     *
     * @var string
     */
    protected $labelInLegend;

    /**
     * The line width of the trendline , in pixels.
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * The transparency of the trendline , from 0.0 (transparent) to 1.0 (opaque).
     *
     * @var float
     */
    protected $opacity;

    /**
     * Trendlines are constucted by stamping a bunch of dots on the chart; this rarely-needed option lets you customize
     * the size of the dots. The trendline's lineWidth option will usually be preferable. However, you'll need this
     * option if you're using the global pointSize option and want a different point size for your trendlines.
     *
     * @var int
     */
    protected $pointSize;

    /**
     * Trendlines are constucted by stamping a bunch of dots on the chart. The trendline's pointsVisible option
     * determines whether the points for a particular trendline are visible.
     *
     * @var bool
     */
    protected $pointsVisible;

    /**
     * Whether to show the coefficient of determination in the legend or trendline tooltip.
     *
     * @var bool
     */
    protected $showR2;

    /**
     * Whether the trendlines is 'linear' (the default), 'exponential', or 'polynomial'.
     *
     * @var string
     */
    protected $type;

    /**
     * Whether the trendline equation appears in the legend. (It will appear in the trendline tooltip.)
     *
     * @var bool
     */
    protected $visibleInLegend;


    /**
     * @param boolean $visibleInLegend
     *
     * @return Trendlines
     */
    public function setVisibleInLegend($visibleInLegend)
    {
        $this->visibleInLegend = $visibleInLegend;

        return $this;
    }

    /**
     * @param string $color
     *
     * @return Trendlines
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param int $degree
     *
     * @return Trendlines
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * @param string $labelInLegend
     *
     * @return Trendlines
     */
    public function setLabelInLegend($labelInLegend)
    {
        $this->labelInLegend = $labelInLegend;

        return $this;
    }

    /**
     * @param int $lineWidth
     *
     * @return Trendlines
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }

    /**
     * @param float $opacity
     *
     * @return Trendlines
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * @param int $pointSize
     *
     * @return Trendlines
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;

        return $this;
    }

    /**
     * @param boolean $pointsVisible
     *
     * @return Trendlines
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;

        return $this;
    }

    /**
     * @param boolean $showR2
     *
     * @return Trendlines
     */
    public function setShowR2($showR2)
    {
        $this->showR2 = $showR2;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return Trendlines
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
