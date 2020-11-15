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

    public function __construct(Chart $chart)
    {
        $this->listeners = [];
        $this->chart = $chart;
    }

    public function addListener(string $type, string $functionName): void
    {
        if (!in_array($type, $this->chart->getAvailableEventTypes())) {
            throw new GoogleChartsException("$type event is not available for this type of chart.");
        }

        $this->listeners[] = new Listener($type, $functionName);
    }

    /**
     * @return Listener[]
     */
    public function getListeners(): array
    {
        return $this->listeners;
    }
}
