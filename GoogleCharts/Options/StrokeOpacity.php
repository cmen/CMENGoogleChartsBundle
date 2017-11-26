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
     * @param float $strokeOpacity
     *
     * @return $this
     */
    public function setStrokeOpacity($strokeOpacity)
    {
        $this->strokeOpacity = $strokeOpacity;

        return $this;
    }
}
