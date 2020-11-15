<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TreeMapChart\TreeMapChartOptions;

/**
 * @author Christophe Meneses
 */
class TreeMapChart extends Chart
{
    /**
     * @var TreeMapChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new TreeMapChartOptions();
    }

    public function getType(): string
    {
        return 'TreeMap';
    }

    public function getPackage(): string
    {
        return 'treemap';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::ROLLUP,
            EventType::SELECT,
        ];
    }

    public function getOptions(): TreeMapChartOptions
    {
        return $this->options;
    }

    /**
     * @param TreeMapChartOptions $options
     */
    public function setOptions(/* TreeMapChartOptions */$options): TreeMapChart
    {
        $this->options = $options;

        return $this;
    }
}
