<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\MaterialLineChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Axes;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MaterialChartOptions;

/**
 * Beta fixture
 *
 * @author Christophe Meneses
 */
class MaterialLineChartOptions extends MaterialChartOptions
{
    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var Axes
     */
    protected $axes;


    public function __construct()
    {
        parent::__construct();

        $this->axes = new Axes();
    }


    /**
     * @return Axes
     */
    public function getAxes()
    {
        return $this->axes;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}
