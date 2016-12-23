<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MinorGridlines
{
    /**
     * The color of the horizontal minor gridlines inside the chart area. Specify a valid HTML color string.
     *
     * @var string
     */
    protected $color;

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
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
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
