<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrgChart\OrgChartOptions;

/**
 * @author Christophe Meneses
 */
class OrgChart extends Chart
{
    /**
     * @var OrgChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new OrgChartOptions();
    }

    public function getType(): string
    {
        return 'OrgChart';
    }

    public function getPackage(): string
    {
        return 'orgchart';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::COLLAPSE,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): OrgChartOptions
    {
        return $this->options;
    }

    /**
     * @param OrgChartOptions $options
     */
    public function setOptions(/* OrgChartOptions */$options): OrgChart
    {
        $this->options = $options;

        return $this;
    }
}
