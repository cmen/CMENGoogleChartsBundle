<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart\CandlestickChartOptions;

/**
 * @author Christophe Meneses
 */
class CandlestickChart extends Chart
{
    /**
     * @var CandlestickChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new CandlestickChartOptions();
    }

    public function getType(): string
    {
        return 'CandlestickChart';
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

    public function getOptions(): CandlestickChartOptions
    {
        return $this->options;
    }

    /**
     * @param CandlestickChartOptions $options
     */
    public function setOptions(/* CandlestickChartOptions */$options): CandlestickChart
    {
        $this->options = $options;

        return $this;
    }
}
