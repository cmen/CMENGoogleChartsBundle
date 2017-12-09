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
     *
     * @return $this
     */
    public function setRadiusFactor($radiusFactor)
    {
        $this->radiusFactor = $radiusFactor;

        return $this;
    }

    /**
     * @param float $borderFactor
     *
     * @return $this
     */
    public function setBorderFactor($borderFactor)
    {
        $this->borderFactor = $borderFactor;

        return $this;
    }
}
