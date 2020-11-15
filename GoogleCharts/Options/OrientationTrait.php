<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait OrientationTrait
{
    /**
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart so that (for instance) a
     * column chart becomes a bar chart, and an area chart grows rightward.
     * Default: 'horizontal'.
     *
     * For crosshair orientation, can be 'vertical' for vertical hairs only, 'horizontal' for horizontal hairs
     * only, or 'both' for traditional crosshairs.
     * Default: 'both'
     *
     * @var string
     */
    protected $orientation;

    /**
     * @return $this
     */
    public function setOrientation(string $orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }
}
