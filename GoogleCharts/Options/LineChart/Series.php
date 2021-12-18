<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CurveTypeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineSeries;

/**
 * @author Christophe Meneses
 */
class Series extends LineSeries
{
    use CurveTypeTrait;

    /**
     * @var Annotations
     */
    protected $annotations;

    public function __construct()
    {
        $this->annotations = new Annotations();
    }

    public function getAnnotations(): Annotations
    {
        return $this->annotations;
    }
}
