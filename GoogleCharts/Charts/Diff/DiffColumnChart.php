<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffColumnChart\DiffColumnChartOptions;

class DiffColumnChart extends ColumnChart implements DiffChart
{
    /**
     * @var DiffColumnChartOptions
     */
    protected $options;

    /**
     * @var BarChart|ColumnChart
     */
    private $oldChart;

    /**
     * @var BarChart|ColumnChart
     */
    private $newChart;

    /**
     * @param BarChart|ColumnChart|object $oldChart
     * @param BarChart|ColumnChart|object $newChart
     *
     * @throws GoogleChartsException
     */
    public function __construct($oldChart, $newChart)
    {
        if ((!$oldChart instanceof ColumnChart && !$oldChart instanceof BarChart)
            || (!$newChart instanceof ColumnChart && !$newChart instanceof BarChart)) {
            throw new GoogleChartsException('Instance of ColumnChart or BarChart is expected');
        }

        parent::__construct();

        $this->options = new DiffColumnChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    /**
     * @return DiffColumnChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param DiffColumnChartOptions $options
     */
    public function setOptions(/* DiffColumnChartOptions */$options): DiffColumnChart
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return BarChart|ColumnChart
     */
    public function getOldChart()
    {
        return $this->oldChart;
    }

    /**
     * @return BarChart|ColumnChart
     */
    public function getNewChart()
    {
        return $this->newChart;
    }
}
