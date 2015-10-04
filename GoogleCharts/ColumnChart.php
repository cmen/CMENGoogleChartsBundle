<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;

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
     * @inheritdoc
     */
    protected function getType()
    {
        return 'ColumnChart';
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
     * @return ColumnChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
