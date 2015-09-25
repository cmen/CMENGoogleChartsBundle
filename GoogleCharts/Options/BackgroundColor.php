<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class BackgroundColor
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
     * The chart fill color, as an HTML color string.
     *
     * @var string
     */
    protected $fill;


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

    /**
     * @param string $fill
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
    }
}
