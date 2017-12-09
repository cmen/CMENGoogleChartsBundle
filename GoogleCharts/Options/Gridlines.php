<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Gridlines
{
    use ColorTrait;

    /**
     * The number of horizontal gridlines inside the chart area. Minimum value is 2. Specify -1 to automatically
     * compute the number of gridlines.
     *
     * @var int
     */
    protected $count;

    /**
     * @var Units
     */
    protected $units;

    /**
     * Gridlines constructor.
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
