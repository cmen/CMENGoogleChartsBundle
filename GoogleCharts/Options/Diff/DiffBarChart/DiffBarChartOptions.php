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

    /**
     * DiffBarChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->diff = new Diff();
    }

    /**
     * @return Diff
     */
    public function getDiff()
    {
        return $this->diff;
    }
}
