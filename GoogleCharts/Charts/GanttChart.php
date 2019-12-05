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

    public function getType()
    {
        return 'Gantt';
    }

    public function getPackage()
    {
        return 'gantt';
    }

    public function getAvailableEventTypes()
    {
        return [
            EventType::CLICK,
            EventType::ERROR,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return GanttChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param GanttChartOptions $options
     *
     * @return GanttChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
