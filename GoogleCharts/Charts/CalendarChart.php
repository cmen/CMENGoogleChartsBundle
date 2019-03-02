<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart\CalendarChartOptions;

/**
 * @author Christophe Meneses
 */
class CalendarChart extends Chart
{
    /**
     * @var CalendarChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new CalendarChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'Calendar';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'calendar';
    }

    /**
     * {@inheritdoc}
     */
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
     * @return CalendarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options CalendarChartOptions
     *
     * @return CalendarChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
