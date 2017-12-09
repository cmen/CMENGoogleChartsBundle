<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnnotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    /**
     * @var AdvancedAnnotations
     */
    protected $annotations;

    /**
     * Series constructor.
     */
    public function __construct()
    {
        $this->annotations = new Annotations();
    }

    /**
     * @return AdvancedAnnotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }
}
