<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;

/**
 * @author Christophe Meneses
 */
class ColumnChart extends Chart
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

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'ColumnChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return ColumnChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options ColumnChartOptions
     *
     * @return ColumnChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
