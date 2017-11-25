<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Stem
{
    use ColorTrait;

    /**
     * @var int
     */
    protected $length;

    /**
     * @param int $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }
}
