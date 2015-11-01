<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart;

/**
 * @author Christophe Meneses
 */
class NewData
{
    /**
     * Transparency of new data.
     *
     * @var float
     */
    protected $opacity;


    /**
     * @param float $opacity
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}
