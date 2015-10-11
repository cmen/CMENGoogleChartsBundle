<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart\CandlestickChartOptions;

/**
 * @author Christophe Meneses
 */
class CandlestickChart extends Chart
{
    /**
     * @var CandlestickChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new CandlestickChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'CandlestickChart';
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
     * @return CandlestickChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
