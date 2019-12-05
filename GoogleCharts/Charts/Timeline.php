<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline\TimelineOptions;

/**
 * @author Christophe Meneses
 */
class Timeline extends Chart
{
    /**
     * @var TimelineOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new TimelineOptions();
    }

    public function getType()
    {
        return 'Timeline';
    }

    public function getPackage()
    {
        return 'timeline';
    }

    public function getAvailableEventTypes()
    {
        return [
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return TimelineOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param TimelineOptions $options
     *
     * @return Timeline
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
