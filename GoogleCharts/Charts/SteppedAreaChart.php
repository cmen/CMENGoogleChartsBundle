<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart\SteppedAreaChartOptions;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChart extends Chart
{
    /**
     * @var SteppedAreaChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new SteppedAreaChartOptions();
    }

    public function getType(): string
    {
        return 'SteppedAreaChart';
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

    public function getOptions(): SteppedAreaChartOptions
    {
        return $this->options;
    }

    /**
     * @param SteppedAreaChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): SteppedAreaChart
    {
        $this->options = $options;

        return $this;
    }
}
