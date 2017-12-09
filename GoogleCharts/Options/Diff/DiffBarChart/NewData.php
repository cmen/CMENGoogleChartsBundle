<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffBarChart;

/**
 * @author Christophe Meneses
 */
class NewData
{
    /**
     * Let you control the relative width of the old and new bars.
     *
     * @var float
     */
    protected $widthFactor;

    /**
     * @param float $widthFactor
     *
     * @return $this
     */
    public function setWidthFactor($widthFactor)
    {
        $this->widthFactor = $widthFactor;

        return $this;
    }
}
