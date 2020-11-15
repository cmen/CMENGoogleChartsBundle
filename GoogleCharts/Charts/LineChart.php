<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions;

/**
 * @author Christophe Meneses
 */
class LineChart extends Chart
{
    /**
     * @var LineChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new LineChartOptions();
    }

    public function getType(): string
    {
        return 'LineChart';
    }

    public function getPackage(): string
    {
        return 'corechart';
    }

    public function getAvailableEventTypes(): array
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

    public function getOptions()/* : LineChartOptions */
    {
        return $this->options;
    }

    /**
     * @param LineChartOptions $options
     */
    public function setOptions(/* LineChartOptions */$options): LineChart
    {
        $this->options = $options;

        return $this;
    }
}
