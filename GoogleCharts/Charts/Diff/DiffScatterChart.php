<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ScatterChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart\DiffScatterChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffScatterChart extends ScatterChart implements DiffChart
{
    /**
     * @var DiffScatterChartOptions
     */
    protected $options;

    /**
     * @var ScatterChart
     */
    private $oldChart;

    /**
     * @var ScatterChart
     */
    private $newChart;

    public function __construct(ScatterChart $oldChart, ScatterChart $newChart)
    {
        parent::__construct();

        $this->options = new DiffScatterChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    public function getOptions(): DiffScatterChartOptions
    {
        return $this->options;
    }

    /**
     * @param DiffScatterChartOptions $options
     */
    public function setOptions(/* DiffScatterChartOptions */$options): DiffScatterChart
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return ScatterChart
     */
    public function getOldChart()
    {
        return $this->oldChart;
    }

    /**
     * @return ScatterChart
     */
    public function getNewChart()
    {
        return $this->newChart;
    }
}
