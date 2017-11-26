<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait WidthTrait
{
    /**
     * Width of the element, in pixels.
     *
     * Default: width of the containing element
     *
     * @var int
     */
    protected $width;

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
