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

    public function getType()
    {
        return 'OrgChart';
    }

    public function getPackage()
    {
        return 'orgchart';
    }

    public function getAvailableEventTypes()
    {
        return [
            EventType::COLLAPSE,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return OrgChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param OrgChartOptions $options
     *
     * @return OrgChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
