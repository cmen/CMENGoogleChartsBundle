<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart;

/**
 * @author Christophe Meneses
 */
class ColorAxis extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorAxis
{
    /**
     * @var Legend
     */
    protected $legend;

    public function __construct()
    {
        $this->legend = new Legend();
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }
}
