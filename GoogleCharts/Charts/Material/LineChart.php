<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\Material\LineChartOptions;

/**
 * Class LineChart
 *
 * @author Christophe Meneses
 */
class LineChart extends \CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart
{
    /**
     * LineChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new LineChartOptions();
    }

    /**
     * @inheritdoc
     */
    public function getPackage()
    {
        return 'line';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'charts';
    }

    /**
     * @inheritdoc
     */
    protected function getType()
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
