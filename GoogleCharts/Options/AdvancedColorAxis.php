<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart\Legend;

/**
 * @author Christophe Meneses
 */
class AdvancedColorAxis extends ColorAxis
{
    /**
     * @var Legend
     */
    protected $legend;

    /**
     * AdvancedColorAxis constructor.
     */
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
