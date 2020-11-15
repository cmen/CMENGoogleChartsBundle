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

    public function getPackage(): string
    {
        return 'line';
    }

    public function getLibrary(): string
    {
        return 'charts';
    }

    public function getType(): string
    {
        return 'Line';
    }

    public function getOptions(): LineChartOptions
    {
        return $this->options;
    }
}
