<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\Material\ScatterChartOptions;

/**
 * @author Christophe Meneses
 */
class ScatterChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\ScatterChart
{
    /**
     * @var ScatterChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ScatterChartOptions();
    }

    public function getPackage(): string
    {
        return 'scatter';
    }

    public function getLibrary(): string
    {
        return 'charts';
    }

    public function getType(): string
    {
        return 'Scatter';
    }

    public function getOptions(): ScatterChartOptions
    {
        return $this->options;
    }
}
