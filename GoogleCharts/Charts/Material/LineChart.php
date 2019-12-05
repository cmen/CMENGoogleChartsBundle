<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\Material\LineChartOptions;

/**
 * @author Christophe Meneses
 */
class LineChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart
{
    /**
     * @var LineChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new LineChartOptions();
    }

    public function getPackage()
    {
        return 'line';
    }

    public function getLibrary()
    {
        return 'charts';
    }

    public function getType()
    {
        return 'Line';
    }

    /**
     * @return LineChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
