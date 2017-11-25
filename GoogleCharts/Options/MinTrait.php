<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait MinTrait
{
    /**
     * The minimum value to show.
     *
     * @var int
     */
    protected $min;

    /**
     * @param int $min
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }
}
