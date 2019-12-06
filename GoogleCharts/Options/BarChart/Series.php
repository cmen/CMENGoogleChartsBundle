<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnnotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    /**
     * @var AdvancedAnnotations
     */
    protected $annotations;

    public function __construct()
    {
        $this->annotations = new AdvancedAnnotations();
    }

    /**
     * @return AdvancedAnnotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }
}
