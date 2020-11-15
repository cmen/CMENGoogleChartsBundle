<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart\GeoChartOptions;

/**
 * @author Christophe Meneses
 */
class GeoChart extends Chart
{
    /**
     * @var GeoChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new GeoChartOptions();
    }

    public function getType(): string
    {
        return 'GeoChart';
    }

    public function getPackage(): string
    {
        return 'geochart';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::ERROR,
            EventType::READY,
            EventType::REGION_CLICK,
            EventType::SELECT,
        ];
    }

    public function getOptions(): GeoChartOptions
    {
        return $this->options;
    }

    /**
     * @param GeoChartOptions $options
     */
    public function setOptions(/* GeoChartOptions */$options): GeoChart
    {
        $this->options = $options;

        return $this;
    }
}
