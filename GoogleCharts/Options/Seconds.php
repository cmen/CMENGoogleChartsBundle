<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Seconds
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Seconds
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
