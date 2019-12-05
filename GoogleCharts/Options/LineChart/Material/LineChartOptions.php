<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\MaterialTrait;

/**
 * @author Christophe Meneses
 */
class LineChartOptions extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions
{
    use MaterialTrait;

    public function __construct()
    {
        parent::__construct();

        $this->chart = new Chart();
    }
}
