<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait StrokeWidthTrait
{
    /**
     * The width in pixels.
     *
     * Default: '0'
     *
     * @var int|float
     */
    protected $strokeWidth;

    /**
     * @param int|float $strokeWidth
     *
     * @return $this
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
