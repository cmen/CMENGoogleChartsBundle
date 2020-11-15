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

    public function getPackage(): string
    {
        return 'bar';
    }

    public function getLibrary(): string
    {
        return 'charts';
    }

    public function getType(): string
    {
        return 'Bar';
    }

    public function getOptions(): ColumnChartOptions
    {
        return $this->options;
    }
}
