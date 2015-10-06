<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedBackgroundColor extends BasicBackgroundColor
{
    /**
     * The chart fill color, as an HTML color string.
     *
     * @var string
     */
    protected $fill;

    /**
     * @param string $fill
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
    }
}
