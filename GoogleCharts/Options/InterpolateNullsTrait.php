<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait InterpolateNullsTrait
{
    /**
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     * This is not supported by Area charts with the isStacked: true/'percent'/'relative'/'absolute' option.
     *
     * Default: false
     *
     * @var bool
     */
    protected $interpolateNulls;

    /**
     * @param bool $interpolateNulls
     *
     * @return $this
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;

        return $this;
    }
}
