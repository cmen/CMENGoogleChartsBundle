<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class RisingColor
{
    /**
     * The fill color of rising candles, as an HTML color string.
     *
     * @var string
     */
    protected $fill;

    /**
     * The stroke color of rising candles, as an HTML color string.
     *
     * @var string
     */
    protected $stroke;

    /**
     * The stroke width of rising candles, as an HTML color string.
     *
     * @var int
     */
    protected $strokeWidth;


    /**
     * @param string $fill
     *
     * @return RisingColor
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * @param string $stroke
     *
     * @return RisingColor
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @param int $strokeWidth
     *
     * @return RisingColor
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
