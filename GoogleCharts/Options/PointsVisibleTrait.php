<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait PointsVisibleTrait
{
    /**
     *  Determines whether points will be displayed. Set to false to hide all points. You can override values for
     * individual series using the series property. If you're using a trendline, the pointsVisible option will affect
     * the visibility of the points on all trendlines unless you override it with the trendlines.n.pointsVisible option.
     *
     * This can also be overridden using the style role in the form of "point {visible: true}".
     *
     * Default: true
     *
     * @var bool
     */
    protected $pointsVisible;

    /**
     * @return $this
     */
    public function setPointsVisible(bool $pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;

        return $this;
    }
}
