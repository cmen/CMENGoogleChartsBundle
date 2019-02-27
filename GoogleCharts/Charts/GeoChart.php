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

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'GeoChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'geochart';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
    {
        return [
            EventType::ERROR,
            EventType::READY,
            EventType::REGION_CLICK,
            EventType::SELECT,
        ];
    }

    /**
     * @return GeoChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options GeoChartOptions
     *
     * @return GeoChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
