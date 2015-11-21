<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

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
     *
     * @return NewData
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }
}
