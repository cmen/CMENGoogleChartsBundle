<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Years
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Years
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
