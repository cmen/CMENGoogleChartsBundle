<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart\CalendarChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
class CalendarChart extends Chart
{
    /**
     * @var CalendarChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new CalendarChartOptions();
    }

    public function getType(): string
    {
        return 'Calendar';
    }

    public function getPackage(): string
    {
        return 'calendar';
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

    public function getOptions(): CalendarChartOptions
    {
        return $this->options;
    }

    /**
     * @param CalendarChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): CalendarChart
    {
        $this->options = $options;

        return $this;
    }
}
