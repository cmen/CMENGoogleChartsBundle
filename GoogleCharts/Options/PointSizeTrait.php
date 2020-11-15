<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait PointSizeTrait
{
    /**
     * Diameter of displayed points in pixels. Use zero to hide all points. You can override values for individual
     * series using the series property. If you're using a trendline, the pointSize option will affect the width of
     * the trendline unless you override it with the trendlines.n.pointsize option.
     *
     * Default: 0
     *
     * @var int
     */
    protected $pointSize;

    /**
     * @return $this
     */
    public function setPointSize(int $pointSize)
    {
        $this->pointSize = $pointSize;

        return $this;
    }
}
