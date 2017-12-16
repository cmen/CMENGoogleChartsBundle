<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\ComboChartOptions;

/**
 * @author Christophe Meneses
 */
class ComboChart extends Chart
{
    /**
     * @var ComboChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ComboChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'ComboChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return ComboChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options ComboChartOptions
     *
     * @return ComboChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
