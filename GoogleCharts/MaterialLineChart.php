<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MaterialLineChart\MaterialLineChartOptions;

/**
 * @author Christophe Meneses
 */
class MaterialLineChart extends Chart
{
    /**
     * @var MaterialLineChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new MaterialLineChartOptions();
    }

    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Line';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'charts';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'line';
    }

    /**
     * @return MaterialLineChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
