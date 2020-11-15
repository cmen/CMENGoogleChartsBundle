<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait LineWidthTrait
{
    /**
     * Data line width in pixels. Use zero to hide all lines and show only the points. You can override values for
     * individual series using the series property.
     *
     * Default: 2
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * @return $this
     */
    public function setLineWidth(int $lineWidth)
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }
}
