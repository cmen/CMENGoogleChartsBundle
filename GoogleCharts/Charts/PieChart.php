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

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'PieChart';
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
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options PieChartOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
