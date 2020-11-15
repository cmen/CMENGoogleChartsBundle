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
     * @return $this
     */
    public function setWidth(int $width)
    {
        $this->width = $width;

        return $this;
    }
}
