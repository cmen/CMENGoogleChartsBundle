<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart\DiffPieChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffPieChart extends PieChart implements DiffChart
{
    /**
     * @var DiffPieChartOptions
     */
    protected ChartOptionsInterface $options;

    public function __construct(private readonly PieChart $oldChart, private readonly PieChart $newChart)
    {
        parent::__construct();

        $this->options = new DiffPieChartOptions();
    }

    public function getOptions(): DiffPieChartOptions
    {
        return $this->options;
    }

    /**
     * @param DiffPieChartOptions $options
     */
    public function setOptions(ChartOptionsInterface $options): DiffPieChart
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
