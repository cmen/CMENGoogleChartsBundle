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

    public function getType(): string
    {
        return 'AreaChart';
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

    public function getOptions(): AreaChartOptions
    {
        return $this->options;
    }

    /**
     * @param AreaChartOptions $options
     */
    public function setOptions(/* AreaChartOptions */$options): AreaChart
    {
        $this->options = $options;

        return $this;
    }
}
