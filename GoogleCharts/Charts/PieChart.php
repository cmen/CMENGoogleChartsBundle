<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart\PieChartOptions;

/**
 * @author Christophe Meneses
 */
class PieChart extends Chart
{
    /**
     * @var PieChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new PieChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'PieChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
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
     * @param $options PieChartOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
