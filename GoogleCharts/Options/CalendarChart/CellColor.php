<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

/**
 * cellColor option lets you customize the border of the calendar day squares.
 *
 * @author Christophe Meneses
 */
class CellColor
{
    /**
     * Color the border of the squares.
     *
     * @var string
     */
    protected $stroke;

    /**
     * Transparency of the border.
     *
     * @var float
     */
    protected $strokeOpacity;

    /**
     * Width of the border.
     *
     * @var int
     */
    protected $strokeWidth;


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
     * @param float $strokeOpacity
     *
     * @return $this
     */
    public function setStrokeOpacity($strokeOpacity)
    {
        $this->strokeOpacity = $strokeOpacity;

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
