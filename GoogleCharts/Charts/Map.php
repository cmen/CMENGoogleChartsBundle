<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Map\MapOptions;

/**
 * @author Christophe Meneses
 */
class Map extends Chart
{
    /**
     * @var MapOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new MapOptions();
    }


    /**
     * Returns the chart type.
     *
     * @return string
     */
    protected function getType()
    {
        return 'Map';
    }

    /**
     * Returns library used by chart.
     *
     * @return string
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    protected function getPackage()
    {
        return 'map';
    }

    /**
     * @return MapOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
