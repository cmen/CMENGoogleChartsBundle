<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions;

/**
 * @author Christophe Meneses
 */
class LineChart extends Chart
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


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'LineChart';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return LineChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
