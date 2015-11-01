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
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }

    /**
     * @param boolean $inCenter
     */
    public function setInCenter($inCenter)
    {
        $this->inCenter = $inCenter;
    }
}
