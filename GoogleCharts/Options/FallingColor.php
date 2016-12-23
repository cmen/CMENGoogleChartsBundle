<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

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
     *
     * @return $this
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * @param string $stroke
     *
     * @return $this
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @param int $strokeWidth
     *
     * @return $this
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
