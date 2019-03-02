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

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'TreeMap';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'treemap';
    }

    /**
     * {@inheritdoc}
     */
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
