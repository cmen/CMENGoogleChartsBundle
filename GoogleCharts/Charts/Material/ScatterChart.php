<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\Material\ScatterChartOptions;

/**
 * Class ScatterChart.
 *
 * @author Christophe Meneses
 */
class ScatterChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\ScatterChart
{
    /**
     * ScatterChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new ScatterChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'scatter';
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
