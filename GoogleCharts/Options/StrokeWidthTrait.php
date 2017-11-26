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
     * @var int
     */
    protected $strokeWidth;

    /**
     * @param int $strokeWidth
     *
     * @return $this
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
