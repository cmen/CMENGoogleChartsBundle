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
    protected array $listeners;

    public function __construct(protected Chart $chart)
    {
        $this->listeners = [];
    }

    /**
     * @throws GoogleChartsException
     */
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
