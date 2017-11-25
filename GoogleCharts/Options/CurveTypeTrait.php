<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait CurveTypeTrait
{
    /**
     * Controls the curve of the lines when the line width is not zero. Can be one of the following:
     * 'none' - Straight lines without curve.
     * 'function' - The angles of the line will be smoothed.
     *
     * Default: 'none'
     *
     * @var string
     */
    protected $curveType;

    /**
     * @param string $curveType
     *
     * @return $this
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;

        return $this;
    }
}
