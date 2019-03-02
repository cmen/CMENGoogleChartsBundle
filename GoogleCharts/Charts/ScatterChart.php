<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\ScatterChartOptions;

/**
 * @author Christophe Meneses
 */
class ScatterChart extends Chart
{
    /**
     * @var ScatterChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ScatterChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'ScatterChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
    {
        return [
            EventType::ANIMATION_FINISH,
            EventType::CLICK,
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return ScatterChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options ScatterChartOptions
     *
     * @return ScatterChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
