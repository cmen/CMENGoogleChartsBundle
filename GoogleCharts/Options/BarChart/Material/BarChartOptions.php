<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\MaterialTrait;

/**
 * Class BarChartOptions
 *
 * @author Christophe Meneses
 */
class BarChartOptions extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart\BarChartOptions
{
    use MaterialTrait;

    /**
     *  Whether the bars in a Material Bar Chart are vertical or horizontal.
     *
     * @var string
     */
    protected $bars;

    /**
     * BarChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->chart = new Chart();
    }

    /**
     * @param string $bars
     *
     * @return BarChartOptions
     */
    public function setBars($bars)
    {
        $this->bars = $bars;

        return $this;
    }
}
