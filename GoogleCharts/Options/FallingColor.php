<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class FallingColor
{
    /**
     * The fill color of falling candles, as an HTML color string.
     *
     * @var string
     */
    protected $fill;

    /**
     * The stroke color of falling candles, as an HTML color string.
     *
     * @var string
     */
    protected $stroke;

    /**
     * The stroke width of falling candles, as an HTML color string.
     *
     * @var int
     */
    protected $strokeWidth;


    /**
     * @param string $fill
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
    }

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
