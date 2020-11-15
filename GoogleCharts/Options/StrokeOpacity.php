<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait StrokeOpacity
{
    /**
     * The transparency.
     *
     * @var float
     */
    protected $strokeOpacity;

    /**
     * @return $this
     */
    public function setStrokeOpacity(float $strokeOpacity)
    {
        $this->strokeOpacity = $strokeOpacity;

        return $this;
    }
}
