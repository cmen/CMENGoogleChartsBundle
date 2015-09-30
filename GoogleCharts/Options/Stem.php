<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Stem
{
    /**
     * HTML color string
     *
     * @var string
     */
    protected $color;

    /**
     * @var int
     */
    protected $length;


    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }
}
