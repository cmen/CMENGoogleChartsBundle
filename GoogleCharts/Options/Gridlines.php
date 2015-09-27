<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Gridlines
{
    /**
     * The color of the horizontal gridlines inside the chart area. Specify a valid HTML color string.
     *
     * @var string
     */
    protected $color;

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


    /**
     * @return Units
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
