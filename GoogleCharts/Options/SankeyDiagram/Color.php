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
     *
     * @return Color
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * @param float $fillOpacity
     *
     * @return Color
     */
    public function setFillOpacity($fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;

        return $this;
    }

    /**
     * @param string $stroke
     *
     * @return Color
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @param int $strokeWidth
     *
     * @return Color
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
