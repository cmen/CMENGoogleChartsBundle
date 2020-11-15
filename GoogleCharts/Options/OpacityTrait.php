<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait OpacityTrait
{
    /**
     * The opacity, with 0.0 being fully transparent and 1.0 fully opaque.
     *
     * @var float
     */
    protected $opacity;

    /**
     * @return $this
     */
    public function setOpacity(float $opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }
}
