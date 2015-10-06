<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class BasicBackgroundColor
{
    /**
     * The color of the chart border, as an HTML color string.
     *
     * @var string
     */
    protected $stroke;

    /**
     * The border width, in pixels.
     *
     * @var int
     */
    protected $strokeWidth;


    /**
     * @param string $stroke
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @param int $strokeWidth
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
    }
}
