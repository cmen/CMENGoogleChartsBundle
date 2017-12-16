<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\Material\BarChartOptions;

/**
 * Class BarChart.
 *
 * @author Christophe Meneses
 */
class BarChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart
{
    /**
     * BarChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new BarChartOptions();
        $this->options->setBars('horizontal');
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'bar';
    }

    /**
     * {@inheritdoc}
     */
    public function getLibrary()
    {
        return 'charts';
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'Bar';
    }

    /**
     * @return BarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
