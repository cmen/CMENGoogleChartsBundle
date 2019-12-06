<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
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

    /**
     * @param ScatterChart|object $oldChart
     * @param ScatterChart|object $newChart
     *
     * @throws GoogleChartsException
     */
    public function __construct($oldChart, $newChart)
    {
        if (!$oldChart instanceof ScatterChart || !$newChart instanceof ScatterChart) {
            throw new GoogleChartsException('Instance of PieChart is expected');
        }

        parent::__construct();

        $this->options = new DiffScatterChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    /**
     * @return DiffScatterChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param DiffScatterChartOptions $options
     *
     * @return DiffScatterChart
     */
    public function setOptions($options)
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
