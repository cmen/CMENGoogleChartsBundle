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

    public function getType()
    {
        return 'BarChart';
    }

    public function getPackage()
    {
        return 'corechart';
    }

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
     * @param BarChartOptions $options
     *
     * @return BarChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
