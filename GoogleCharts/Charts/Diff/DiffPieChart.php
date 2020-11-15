<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart\DiffPieChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffPieChart extends PieChart implements DiffChart
{
    /**
     * @var DiffPieChartOptions
     */
    protected $options;

    /**
     * @var PieChart
     */
    private $oldChart;

    /**
     * @var PieChart
     */
    private $newChart;

    public function __construct(PieChart $oldChart, PieChart $newChart)
    {
        parent::__construct();

        $this->options = new DiffPieChartOptions();

        $this->oldChart = $oldChart;
        $this->newChart = $newChart;
    }

    public function getOptions(): DiffPieChartOptions
    {
        return $this->options;
    }

    /**
     * @param DiffPieChartOptions $options
     */
    public function setOptions(/* DiffPieChartOptions */$options): DiffPieChart
    {
        $this->options = $options;

        return $this;
    }

    public function getOldChart(): PieChart
    {
        return $this->oldChart;
    }

    public function getNewChart(): PieChart
    {
        return $this->newChart;
    }
}
