<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
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

    /**
     * Returns the chart type.
     *
     * @return string
     */
    public function getType()
    {
        return 'OrgChart';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    public function getPackage()
    {
        return 'orgchart';
    }

    /**
     * @return OrgChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options OrgChartOptions
     *
     * @return Map
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
