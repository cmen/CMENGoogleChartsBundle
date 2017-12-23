<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
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
