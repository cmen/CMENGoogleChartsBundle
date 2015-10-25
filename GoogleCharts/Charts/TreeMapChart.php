<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TreeMapChart\TreeMapChartOptions;

/**
 * @author Christophe Meneses
 */
class TreeMapChart extends Chart
{
    /**
     * @var TreeMapChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new TreeMapChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'TreeMap';
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
    public function getPackage()
    {
        return 'treemap';
    }

    /**
     * @return TreeMapChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options TreeMapChartOptions
     *
     * @return TreeMapChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
