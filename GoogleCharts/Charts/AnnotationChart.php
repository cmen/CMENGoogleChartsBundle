<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;

/**
 * @author Christophe Meneses
 */
class AnnotationChart extends Chart
{
    /**
     * @var AnnotationChartOptions
     */
    protected $options;

    /**
     * AnnotationChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->options = new AnnotationChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'AnnotationChart';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'annotationchart';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
    {
        return [
            EventType::RANGE_CHANGE,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return AnnotationChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options AnnotationChartOptions
     *
     * @return AnnotationChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
