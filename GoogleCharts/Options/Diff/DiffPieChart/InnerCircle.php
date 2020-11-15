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
     * @return $this
     */
    public function setRadiusFactor(float $radiusFactor)
    {
        $this->radiusFactor = $radiusFactor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setBorderFactor(float $borderFactor)
    {
        $this->borderFactor = $borderFactor;

        return $this;
    }
}
