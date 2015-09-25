<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\PieCharts\PieChartOptions;

class PieChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->options = new PieChartOptions();
    }

    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'PieChart';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return PieChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
