<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ChartOptions extends ChartOptionsDraw
{
    use ForceIFrameTrait;

    use HeightTrait;

    /**
     * Width of the chart, in pixels.
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
