<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait MaxTrait
{
    /**
     * The maximum value to show.
     *
     * @var int
     */
    protected $max;

    /**
     * @return $this
     */
    public function setMax(int $max)
    {
        $this->max = $max;

        return $this;
    }
}
