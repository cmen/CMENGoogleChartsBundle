<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\GaugeChart\GaugeChartOptions;

/**
 * @author Christophe Meneses
 */
class GaugeChart extends Chart
{
    /**
     * @var GaugeChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new GaugeChartOptions();
    }

    public function getType()
    {
        return 'Gauge';
    }

    public function getPackage()
    {
        return 'gauge';
    }

    public function getAvailableEventTypes()
    {
        return [];
    }

    /**
     * @return GaugeChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param GaugeChartOptions $options
     *
     * @return GaugeChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
