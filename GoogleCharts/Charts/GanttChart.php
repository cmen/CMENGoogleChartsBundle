<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart\GanttChartOptions;

/**
 * @author Christophe Meneses
 */
class GanttChart extends Chart
{
    /**
     * @var GanttChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new GanttChartOptions();
    }

    public function getType(): string
    {
        return 'Gantt';
    }

    public function getPackage(): string
    {
        return 'gantt';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::CLICK,
            EventType::ERROR,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): GanttChartOptions
    {
        return $this->options;
    }

    /**
     * @param GanttChartOptions $options
     */
    public function setOptions(/* GanttChartOptions */$options): GanttChart
    {
        $this->options = $options;

        return $this;
    }
}
