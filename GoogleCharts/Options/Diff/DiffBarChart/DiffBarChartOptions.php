<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffBarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\BarChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffBarChartOptions extends BarChartOptions
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
