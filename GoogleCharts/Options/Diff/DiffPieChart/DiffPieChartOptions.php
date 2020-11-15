<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart\PieChartOptions;

class DiffPieChartOptions extends PieChartOptions
{
    /**
     * @var Diff
     */
    protected $diff;

    public function __construct()
    {
        parent::__construct();

        $this->diff = new Diff();
    }

    public function getDiff(): Diff
    {
        return $this->diff;
    }
}
