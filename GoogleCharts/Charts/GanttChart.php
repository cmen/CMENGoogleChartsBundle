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

    /**
     * GanttChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new GanttChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'Gantt';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'gantt';
    }

    /**
     * {@inheritdoc}
     */
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
     * @param $options GanttChartOptions
     *
     * @return GanttChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
