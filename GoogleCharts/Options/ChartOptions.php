<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ChartOptions extends ChartOptionsDraw
{
    use ForceIFrameTrait;

    /**
     * Height of the chart, in pixels.
     *
     * @var int
     */
    protected $height;

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

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
