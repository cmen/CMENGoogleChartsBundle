<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffColumnChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;

/**
 * @author Christophe Meneses
 */
class DiffColumnChartOptions extends ColumnChartOptions
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
