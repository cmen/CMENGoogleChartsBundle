<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Map\MapOptions;

/**
 * @author Christophe Meneses
 */
class Map extends Chart
{
    /**
     * @var MapOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new MapOptions();
    }

    public function getType(): string
    {
        return 'Map';
    }

    public function getPackage(): string
    {
        return 'map';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::ERROR,
            EventType::SELECT,
        ];
    }

    public function getOptions(): MapOptions
    {
        return $this->options;
    }

    /**
     * @param MapOptions $options
     */
    public function setOptions(/* MapOptions */$options): Map
    {
        $this->options = $options;

        return $this;
    }
}
