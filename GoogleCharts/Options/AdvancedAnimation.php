<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedAnimation extends Animation
{
    /**
     * Determines if the chart will animate on the initial draw. If true, the chart will start at the baseline and
     * animate to its final state.
     *
     * @var boolean
     */
    protected $startup;

    /**
     * @param boolean $startup
     */
    public function setStartup($startup)
    {
        $this->startup = $startup;
    }
}
