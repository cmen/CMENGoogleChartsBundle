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
     * @return $this
     */
    public function setFill(string $fill)
    {
        $this->fill = $fill;

        return $this;
    }
}
