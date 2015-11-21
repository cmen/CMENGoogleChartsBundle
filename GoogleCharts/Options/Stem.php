<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

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
     *
     * @return Stem
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param int $length
     *
     * @return Stem
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }
}
