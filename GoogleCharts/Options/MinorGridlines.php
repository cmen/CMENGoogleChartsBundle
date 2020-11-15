<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MinorGridlines
{
    use ColorTrait;

    /**
     * The number of horizontal minor gridlines between two regular gridlines.
     *
     * @var int
     */
    protected $count;

    /**
     * @var Units
     */
    protected $units;

    public function __construct()
    {
        $this->units = new Units();
    }

    public function getUnits(): Units
    {
        return $this->units;
    }

    /**
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }
}
