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

    public function getAnnotations(): AdvancedAnnotations
    {
        return $this->annotations;
    }
}
