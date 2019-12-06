<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
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

    public function getType()
    {
        return 'TreeMap';
    }

    public function getPackage()
    {
        return 'treemap';
    }

    public function getAvailableEventTypes()
    {
        return [
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::ROLLUP,
            EventType::SELECT,
        ];
    }

    /**
     * @return TreeMapChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param TreeMapChartOptions $options
     *
     * @return TreeMapChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
