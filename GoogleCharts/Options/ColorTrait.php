<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ColorTrait
{
    /**
     * Color, expressed as either a color name (e.g., "blue") or an RGB value (e.g., "#adf").
     *
     * @var string
     */
    protected $color;

    /**
     * @return $this
     */
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }
}
