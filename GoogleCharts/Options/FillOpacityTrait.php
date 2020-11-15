<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FillOpacityTrait
{
    /**
     * The transparency.
     *
     * @var float
     */
    protected $fillOpacity;

    /**
     * @return $this
     */
    public function setFillOpacity(float $fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;

        return $this;
    }
}
