<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\Material\BarChartOptions;

/**
 * @author Christophe Meneses
 */
class BarChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart
{
    /**
     * @var BarChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BarChartOptions();
        $this->options->setBars('horizontal');
    }

    public function getPackage()
    {
        return 'bar';
    }

    public function getLibrary()
    {
        return 'charts';
    }

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
