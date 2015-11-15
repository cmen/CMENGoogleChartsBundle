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


    public function __construct(Chart $chart)
    {
        $this->listeners = [];
        $this->chart = $chart;
    }


    /**
     * Adds a listener.
     *
     * @param string $type Type of event
     * @param string $functionName Name of Javascript function
     */
    public function addListener($type, $functionName)
    {
        $this->listeners[] = new Listener($type, $functionName);
    }

    /**
     * Returns Javascript of events.
     *
     * @return string Javascript
     */
    public function draw()
    {
        $js = '';

        foreach ($this->listeners as $listener) {
            $js .= "google.visualization.events.addListener(" . $this->chart->getName() . ", '" . $listener->getType() .
                "', " . $listener->getFunction() . ");";
        }

        return $js;
    }

    /**
     * @return Listener[]
     */
    public function getListeners()
    {
        return $this->listeners;
    }
}
