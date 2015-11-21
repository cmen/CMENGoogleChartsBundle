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
     * @return MinorGridlines
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param int $count
     *
     * @return MinorGridlines
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
