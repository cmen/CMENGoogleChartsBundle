<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaChart\AreaChartOptions;

/**
 * @author Christophe Meneses
 */
class AreaChart extends Chart
{
    /**
     * @var AreaChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new AreaChartOptions();
    }

    public function getType()
    {
        return 'AreaChart';
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
     * @return AreaChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param AreaChartOptions $options
     *
     * @return AreaChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
