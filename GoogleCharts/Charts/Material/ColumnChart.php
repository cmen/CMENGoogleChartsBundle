<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\Material\ColumnChartOptions;

/**
 * @author Christophe Meneses
 */
class ColumnChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart
{
    /**
     * @var ColumnChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ColumnChartOptions();
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
     * @return ColumnChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
