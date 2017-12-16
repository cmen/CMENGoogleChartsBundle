<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart\BubbleChartOptions;

/**
 * @author Christophe Meneses
 */
class BubbleChart extends Chart
{
    /**
     * @var BubbleChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BubbleChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'BubbleChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return BubbleChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options BubbleChartOptions
     *
     * @return BubbleChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
