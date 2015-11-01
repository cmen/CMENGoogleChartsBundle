<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

/**
 * @author Christophe Meneses
 */
class InnerCircle
{
    /**
     * Relative size of the circles.
     *
     * @var float
     */
    protected $radiusFactor;

    /**
     * Border between the two circles.
     *
     * @var float
     */
    protected $borderFactor;


    /**
     * @param float $radiusFactor
     */
    public function setRadiusFactor($radiusFactor)
    {
        $this->radiusFactor = $radiusFactor;
    }

    /**
     * @param float $borderFactor
     */
    public function setBorderFactor($borderFactor)
    {
        $this->borderFactor = $borderFactor;
    }
}
