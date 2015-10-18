<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TreeMapChart\TreeMapOptions;

/**
 * @author Christophe Meneses
 */
class TreeMapChart extends Chart
{
    /**
     * @var TreeMapOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new TreeMapOptions();
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
    protected function getPackage()
    {
        return 'treemap';
    }

    /**
     * @return TreeMapOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
