<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\MaterialTrait;

/**
 * @author Christophe Meneses
 */
class ScatterChartOptions extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart\ScatterChartOptions
{
    use MaterialTrait;

    public function __construct()
    {
        parent::__construct();

        $this->chart = new Chart();
    }
}
