<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

/**
 * @author Christophe Meneses
 */
class Color
{
    /**
     * Color of the link.
     *
     * @var string
     */
    protected $fill;

    /**
     * Transparency of the link.
     *
     * @var float
     */
    protected $fillOpacity;

    /**
     * Color of the link border.
     *
     * @var string
     */
    protected $stroke;

    /**
     * Thickness of the link border (default 0).
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
     * @param float $fillOpacity
     */
    public function setFillOpacity($fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;
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
