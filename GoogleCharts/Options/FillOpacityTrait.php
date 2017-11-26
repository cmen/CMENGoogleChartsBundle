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
     * @param float $fillOpacity
     *
     * @return $this
     */
    public function setFillOpacity($fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;

        return $this;
    }
}
