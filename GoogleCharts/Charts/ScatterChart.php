<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\ScatterChartOptions;

/**
 * @author Christophe Meneses
 */
class ScatterChart extends Chart
{
    /**
     * @var ScatterChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ScatterChartOptions();
    }

    public function getType(): string
    {
        return 'ScatterChart';
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

    public function getOptions()/*: ScatterChartOptions */
    {
        return $this->options;
    }

    /**
     * @param ScatterChartOptions $options
     *
     * @return ScatterChart
     */
    public function setOptions(/* ScatterChartOptions */$options)/* : ScatterChart */
    {
        $this->options = $options;

        return $this;
    }
}
