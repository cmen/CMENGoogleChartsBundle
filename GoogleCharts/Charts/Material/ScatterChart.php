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

    public function getPackage()
    {
        return 'scatter';
    }

    public function getLibrary()
    {
        return 'charts';
    }

    public function getType()
    {
        return 'Scatter';
    }

    /**
     * @return ScatterChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
