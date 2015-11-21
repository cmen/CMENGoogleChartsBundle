<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ChartOptions extends ChartOptionsDraw
{
    /**
     * Draws the chart inside an inline frame. (Note that on IE8, this option is ignored; all IE8 charts are drawn
     * in i-frames.)
     *
     * @var boolean
     */
    protected $forceIFrame;

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
     * @return ChartOptions
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int $height
     *
     * @return ChartOptions
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param boolean $forceIFrame
     *
     * @return ChartOptions
     */
    public function setForceIFrame($forceIFrame)
    {
        $this->forceIFrame = $forceIFrame;

        return $this;
    }
}
