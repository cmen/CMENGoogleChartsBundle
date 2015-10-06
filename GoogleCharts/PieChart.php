<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

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
     * @inheritdoc
     */
    protected function getType()
    {
        return 'PieChart';
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
     * @PieChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
