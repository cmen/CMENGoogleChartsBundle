<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeWidthTrait;

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

    use StrokeTrait;

    use StrokeWidthTrait;

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
     * @param float $fillOpacity
     *
     * @return $this
     */
    public function setFillOpacity($fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;

        return $this;
    }
}
