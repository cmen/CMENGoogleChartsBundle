<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ScatterChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart\DiffScatterChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffScatterChart extends ScatterChart implements DiffChart
{
    /**
     * @var DiffScatterChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct(private readonly ScatterChart $oldChart, private readonly ScatterChart $newChart)
    {
        parent::__construct();

        $this->options = new DiffScatterChartOptions();
    }

    public function getOptions(): DiffScatterChartOptions
    {
        return $this->options;
    }

    /**
     * @param DiffScatterChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): DiffScatterChart
    {
        $this->options = $options;

        return $this;
    }

    public function getOldChart(): ScatterChart
    {
        return $this->oldChart;
    }

    public function getNewChart(): ScatterChart
    {
        return $this->newChart;
    }
}
