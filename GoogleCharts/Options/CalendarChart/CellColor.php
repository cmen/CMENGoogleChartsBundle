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
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @param float $strokeOpacity
     */
    public function setStrokeOpacity($strokeOpacity)
    {
        $this->strokeOpacity = $strokeOpacity;
    }

    /**
     * @param int $strokeWidth
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
    }
}
