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


    public function __construct()
    {
        parent::__construct();

        $this->options = new GanttChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'GanttChart';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
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
}