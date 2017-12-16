<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

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
     *
     * @param Chart $chart
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
