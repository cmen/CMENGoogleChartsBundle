<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\Material\ColumnChartOptions;

/**
 * Class ColumnChart.
 *
 * @author Christophe Meneses
 */
class ColumnChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart
{
    /**
     * ColumnChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new ColumnChartOptions();
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
    protected function getLibrary()
    {
        return 'charts';
    }

    /**
     * {@inheritdoc}
     */
    protected function getType()
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
