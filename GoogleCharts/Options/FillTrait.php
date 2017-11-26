<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FillTrait
{
    /**
     * The fill color as an HTML color string.
     *
     * @var string
     */
    protected $fill;

    /**
     * @param string $fill
     *
     * @return $this
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }
}
