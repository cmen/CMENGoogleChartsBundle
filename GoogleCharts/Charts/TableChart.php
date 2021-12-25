<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TableChart\TableChartOptions;

/**
 * @author Christophe Meneses
 */
class TableChart extends Chart
{
    /**
     * @var TableChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new TableChartOptions();
    }

    public function getType(): string
    {
        return 'Table';
    }

    public function getPackage(): string
    {
        return 'table';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::PAGE,
            EventType::READY,
            EventType::SELECT,
            EventType::SORT,
        ];
    }

    public function getOptions(): TableChartOptions
    {
        return $this->options;
    }

    /**
     * @param TableChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): TableChart
    {
        $this->options = $options;

        return $this;
    }
}
