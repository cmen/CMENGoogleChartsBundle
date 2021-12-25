<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\GaugeChart\GaugeChartOptions;

/**
 * @author Christophe Meneses
 */
class GaugeChart extends Chart
{
    /**
     * @var GaugeChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new GaugeChartOptions();
    }

    public function getType(): string
    {
        return 'Gauge';
    }

    public function getPackage(): string
    {
        return 'gauge';
    }

    public function getAvailableEventTypes(): array
    {
        return [];
    }

    public function getOptions(): GaugeChartOptions
    {
        return $this->options;
    }

    /**
     * @param GaugeChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): GaugeChart
    {
        $this->options = $options;

        return $this;
    }
}
