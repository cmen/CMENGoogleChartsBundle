<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait EnableInteractivityTrait
{
    /**
     * Whether the chart throws user-based events or reacts to user interaction. If false, the chart will not throw
     * 'select' or other interaction-based events (but will throw ready or error events), and will not display
     * hovertext or otherwise change depending on user input.
     *
     * Default: true
     *
     * @var bool
     */
    protected $enableInteractivity;

    /**
     * @param bool $enableInteractivity
     *
     * @return $this
     */
    public function setEnableInteractivity($enableInteractivity)
    {
        $this->enableInteractivity = $enableInteractivity;

        return $this;
    }
}
