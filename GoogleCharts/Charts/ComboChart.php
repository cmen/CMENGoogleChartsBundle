<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\ComboChartOptions;

/**
 * @author Christophe Meneses
 */
class ComboChart extends Chart
{
    /**
     * @var ComboChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ComboChartOptions();
    }

    public function getType(): string
    {
        return 'ComboChart';
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

    public function getOptions(): ComboChartOptions
    {
        return $this->options;
    }

    /**
     * @param ComboChartOptions $options
     */
    public function setOptions(/* ComboChartOptions */$options): ComboChart
    {
        $this->options = $options;

        return $this;
    }
}
