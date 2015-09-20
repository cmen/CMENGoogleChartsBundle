<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

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

    /**
     * @param PieChartOptions $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
}
