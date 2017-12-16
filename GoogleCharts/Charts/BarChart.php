<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\BarChartOptions;

/**
 * @author Christophe Meneses
 */
class BarChart extends Chart
{
    /**
     * @var BarChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BarChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'BarChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return BarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options BarChartOptions
     *
     * @return BarChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
