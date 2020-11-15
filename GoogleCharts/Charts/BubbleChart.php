<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart\BubbleChartOptions;

/**
 * @author Christophe Meneses
 */
class BubbleChart extends Chart
{
    /**
     * @var BubbleChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BubbleChartOptions();
    }

    public function getType(): string
    {
        return 'BubbleChart';
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

    public function getOptions(): BubbleChartOptions
    {
        return $this->options;
    }

    /**
     * @param BubbleChartOptions $options
     */
    public function setOptions(/* BubbleChartOptions */$options): BubbleChart
    {
        $this->options = $options;

        return $this;
    }
}
