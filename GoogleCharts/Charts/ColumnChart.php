<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;

/**
 * @author Christophe Meneses
 */
class ColumnChart extends Chart
{
    /**
     * @var ColumnChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new ColumnChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'ColumnChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
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

    /**
     * @return ColumnChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options ColumnChartOptions
     *
     * @return ColumnChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
