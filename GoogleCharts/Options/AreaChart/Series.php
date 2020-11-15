<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineSeries;

/**
 * @author Christophe Meneses
 */
class Series extends LineSeries
{
    /**
     * @var Annotations
     */
    protected $annotations;

    use AreaOpacityTrait;

    public function __construct()
    {
        $this->annotations = new Annotations();
    }

    public function getAnnotations(): Annotations
    {
        return $this->annotations;
    }
}
