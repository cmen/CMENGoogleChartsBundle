<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffBarChart\DiffBarChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffBarChart extends BarChart implements DiffChart
{
    /**
     * @var BarChart|ColumnChart
     */
    private $oldChart;

    /**
     * @var BarChart|ColumnChart
     */
    private $newChart;

    /**
     * DiffBarChart constructor.
     *
     * @param BarChart|ColumnChart $oldChart
     * @param BarChart|ColumnChart $newChart
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

    /**
     * @return DiffBarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options DiffBarChartOptions
     *
     * @return DiffBarChart
     */
    public function setOptions($options)
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
