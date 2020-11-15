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

    public function getType(): string
    {
        return 'Timeline';
    }

    public function getPackage(): string
    {
        return 'timeline';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): TimelineOptions
    {
        return $this->options;
    }

    /**
     * @param TimelineOptions $options
     */
    public function setOptions(/* TimelineOptions */$options): Timeline
    {
        $this->options = $options;

        return $this;
    }
}
