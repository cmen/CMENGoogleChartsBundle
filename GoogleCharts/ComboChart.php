<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\ComboChart\ComboChartOptions;

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
     * @inheritdoc
     */
    protected function getType()
    {
        return 'ComboChart';
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
     * @return ComboChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}