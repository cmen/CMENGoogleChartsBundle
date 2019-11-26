<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;

/**
 * @author Christophe Meneses
 */
class Events
{
    /**
     * @var Listener[]
     */
    protected $listeners;

    /**
     * @var Chart
     */
    protected $chart;

    /**
     * Events constructor.
     */
    public function __construct(Chart $chart)
    {
        $this->listeners = [];
        $this->chart = $chart;
    }

    /**
     * Adds a listener.
     *
     * @param string $type         Type of event
     * @param string $functionName Name of Javascript function
     */
    public function addListener($type, $functionName)
    {
        if (!in_array($type, $this->chart->getAvailableEventTypes())) {
            throw new GoogleChartsException("$type event is not available for this type of chart.");
        }

        $this->listeners[] = new Listener($type, $functionName);
    }

    /**
     * @return Listener[]
     */
    public function getListeners()
    {
        return $this->listeners;
    }
}
