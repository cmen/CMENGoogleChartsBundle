<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\ScatterChartOptions;

class DiffScatterChartOptions extends ScatterChartOptions
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
