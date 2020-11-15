<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Histogram\HistogramOptions;

/**
 * @author Christophe Meneses
 */
class Histogram extends Chart
{
    /**
     * @var HistogramOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new HistogramOptions();
    }

    public function getType(): string
    {
        return 'Histogram';
    }

    public function getPackage(): string
    {
        return 'corechart';
    }

    public function getAvailableEventTypes(): array
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

    public function getOptions(): HistogramOptions
    {
        return $this->options;
    }

    /**
     * @param HistogramOptions $options
     */
    public function setOptions(/* HistogramOptions */$options): Histogram
    {
        $this->options = $options;

        return $this;
    }
}
