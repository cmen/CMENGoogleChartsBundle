<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Hours
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Hours
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
