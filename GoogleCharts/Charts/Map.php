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

    public function getType()
    {
        return 'Map';
    }

    public function getPackage()
    {
        return 'map';
    }

    public function getAvailableEventTypes()
    {
        return [
            EventType::ERROR,
            EventType::SELECT,
        ];
    }

    /**
     * @return MapOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param MapOptions $options
     *
     * @return Map
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
