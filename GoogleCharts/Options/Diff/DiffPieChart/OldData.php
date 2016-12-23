<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

/**
 * @author Christophe Meneses
 */
class OldData
{
    /**
     * Transparency of old data.
     *
     * @var float
     */
    protected $opacity;

    /**
     * If false, the oldest data surrounds the newest data.
     *
     * @var boolean
     */
    protected $inCenter;


    /**
     * @param float $opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * @param boolean $inCenter
     *
     * @return $this
     */
    public function setInCenter($inCenter)
    {
        $this->inCenter = $inCenter;

        return $this;
    }
}
