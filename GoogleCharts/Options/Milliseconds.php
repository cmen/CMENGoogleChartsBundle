<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Milliseconds
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Milliseconds
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
