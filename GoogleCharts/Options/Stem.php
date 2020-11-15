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
     * @return $this
     */
    public function setLength(int $length)
    {
        $this->length = $length;

        return $this;
    }
}
