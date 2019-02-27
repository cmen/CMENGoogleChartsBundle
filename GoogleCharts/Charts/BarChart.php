<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\BarChartOptions;

/**
 * @author Christophe Meneses
 */
class BarChart extends Chart
{
    /**
     * @var BarChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BarChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'BarChart';
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
     * @return BarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options BarChartOptions
     *
     * @return BarChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
