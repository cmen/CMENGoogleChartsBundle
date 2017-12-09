<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart\DiffPieChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffPieChart extends PieChart implements DiffChart
{
    /**
     * @var PieChart
     */
    private $oldChart;

    /**
     * @var PieChart
     */
    private $newChart;

    public function __construct($oldChart, $newChart)
    {
        if (!$oldChart instanceof PieChart || !$newChart instanceof PieChart) {
            throw new GoogleChartsException('Instance of PieChart is expected');
        }

        parent::__construct();

        $this->options = new DiffPieChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    /**
     * @return DiffPieChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options DiffPieChartOptions
     *
     * @return DiffPieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return PieChart
     */
    public function getOldChart()
    {
        return $this->oldChart;
    }

    /**
     * @return PieChart
     */
    public function getNewChart()
    {
        return $this->newChart;
    }
}
