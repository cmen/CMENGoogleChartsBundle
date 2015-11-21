<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Months
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Months
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
