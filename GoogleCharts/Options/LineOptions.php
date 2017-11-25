<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class LineOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    use LineDashStyleTrait;

    use LineWidthTrait;

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
     * @var AdvancedTooltip
     */
    protected $tooltip;


    /**
     * LineOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->tooltip = new AdvancedTooltip();
    }


    /**
     * @return AdvancedTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
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
}
