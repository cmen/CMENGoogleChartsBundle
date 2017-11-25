<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait HeightTrait
{
    /**
     * Chart area height.
     * Two formats are supported: a number, or a number followed by %. A simple number is a value in pixels;
     * a number followed by % is a percentage.
     *
     * Default: height of the containing element
     *
     * @var string|int
     */
    protected $height;

    /**
     * @param int|string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
