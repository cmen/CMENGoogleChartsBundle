<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart\PieChartOptions;

/**
 * @author Christophe Meneses
 */
class PieChart extends Chart
{
    /**
     * @var PieChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new PieChartOptions();
    }

    public function getType(): string
    {
        return 'PieChart';
    }

    public function getPackage(): string
    {
        return 'corechart';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::CLICK,
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return PieChartOptions
     */
    public function getOptions()/* : PieChartOptions */
    {
        return $this->options;
    }

    /**
     * @param PieChartOptions $options
     *
     * @return PieChart
     */
    public function setOptions(/* PieChartOptions */$options)/* : PieChart */
    {
        $this->options = $options;

        return $this;
    }
}
