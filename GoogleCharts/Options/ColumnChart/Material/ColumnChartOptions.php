<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Material\MaterialTrait;

/**
 * Class ColumnChartOptions
 *
 * @author Christophe Meneses
 */
class ColumnChartOptions extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions
{
    use MaterialTrait;

    /**
     *  Whether the bars in a Material Bar Chart are vertical or horizontal.
     *
     * @var string
     */
    protected $bars;

    /**
     * ColumnChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->chart = new Chart();
    }

    /**
     * @param string $bars
     *
     * @return ColumnChartOptions
     */
    public function setBars($bars)
    {
        $this->bars = $bars;

        return $this;
    }
}
