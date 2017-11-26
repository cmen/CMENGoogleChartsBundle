<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait StrokeTrait
{
    /**
     * The color as an HTML color string.
     *
     * Default: '#666'
     *
     * @var string
     */
    protected $stroke;

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
}
