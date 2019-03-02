<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart\SteppedAreaChartOptions;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChart extends Chart
{
    /**
     * @var SteppedAreaChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new SteppedAreaChartOptions();
    }

    /**
     * Returns the chart type.
     *
     * @return string
     */
    public function getType()
    {
        return 'SteppedAreaChart';
    }

    /**
     * Returns the chart package.
     *
     * @return string
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
     * @return SteppedAreaChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options SteppedAreaChartOptions
     *
     * @return SteppedAreaChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
