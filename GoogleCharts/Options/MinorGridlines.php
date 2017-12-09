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

    /**
     * MinorGridlines constructor.
     */
    public function __construct()
    {
        $this->units = new Units();
    }

    /**
     * @return Units
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
