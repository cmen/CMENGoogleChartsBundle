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

    public function getLegend(): Legend
    {
        return $this->legend;
    }
}
