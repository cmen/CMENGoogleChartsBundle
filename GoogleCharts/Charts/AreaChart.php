<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaChart\AreaChartOptions;

/**
 * @author Christophe Meneses
 */
class AreaChart extends Chart
{
    /**
     * @var AreaChartOptions
     */
    protected $options;

    /**
     * AreaChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new AreaChartOptions();
    }

    /**
     * Returns the chart type.
     *
     * @return string
     */
    public function getType()
    {
        return 'AreaChart';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return AreaChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options AreaChartOptions
     *
     * @return AreaChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
