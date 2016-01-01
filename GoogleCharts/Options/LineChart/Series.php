<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
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

    /**
     * Controls the curve of the lines when the line width is not zero. Can be one of the following:
     * 'none' - Straight lines without curve.
     * 'function' - The angles of the line will be smoothed.
     *
     * @var string
     */
    protected $curveType;


    public function __construct()
    {
        $this->annotations = new Annotations();
    }

    /**
     * @return Annotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @param string $curveType
     *
     * @return Series
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;

        return $this;
    }
}
