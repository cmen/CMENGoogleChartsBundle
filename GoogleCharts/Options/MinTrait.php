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
     * @return $this
     */
    public function setMin(int $min)
    {
        $this->min = $min;

        return $this;
    }
}
