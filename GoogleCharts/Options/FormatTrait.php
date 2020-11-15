<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FormatTrait
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @return $this
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }
}
