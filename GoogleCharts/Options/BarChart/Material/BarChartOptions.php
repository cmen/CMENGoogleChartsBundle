<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BarsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\MaterialTrait;

/**
 * Class BarChartOptions.
 *
 * @author Christophe Meneses
 */
class BarChartOptions extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\BarChartOptions
{
    use MaterialTrait;

    use BarsTrait;

    /**
     * BarChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->chart = new Chart();
    }
}
