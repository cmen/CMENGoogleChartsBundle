<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffBarChart\DiffBarChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffBarChart extends BarChart implements DiffChart
{
    /**
     * @var DiffBarChartOptions
     */
    protected ChartOptionsInterface $options;

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

        $this->options = new DiffBarChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    public function getOptions(): DiffBarChartOptions
    {
        return $this->options;
    }

    /**
     * @param DiffBarChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): DiffBarChart
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return BarChart|ColumnChart
     */
    public function getOldChart(): Chart
    {
        return $this->oldChart;
    }

    /**
     * @return BarChart|ColumnChart
     */
    public function getNewChart(): Chart
    {
        return $this->newChart;
    }
}
