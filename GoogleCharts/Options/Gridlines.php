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
