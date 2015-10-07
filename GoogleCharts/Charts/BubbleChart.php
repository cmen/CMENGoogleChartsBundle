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
     * @inheritdoc
     */
    protected function getType()
    {
        return 'BubbleChart';
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
     * @return BubbleChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
