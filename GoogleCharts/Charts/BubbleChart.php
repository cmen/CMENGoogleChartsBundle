<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart\BubbleChartOptions;

/**
 * @author Christophe Meneses
 */
class BubbleChart extends Chart
{
    /**
     * @var BubbleChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BubbleChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'BubbleChart';
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
     * @return BubbleChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options BubbleChartOptions
     *
     * @return BubbleChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
