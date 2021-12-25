<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
class AnnotationChart extends Chart
{
    /**
     * @var AnnotationChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new AnnotationChartOptions();
    }

    public function getType(): string
    {
        return 'AnnotationChart';
    }

    public function getPackage(): string
    {
        return 'annotationchart';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::RANGE_CHANGE,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): AnnotationChartOptions
    {
        return $this->options;
    }

    /**
     * @param AnnotationChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): AnnotationChart
    {
        $this->options = $options;

        return $this;
    }
}
