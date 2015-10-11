<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class BackgroundColor
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
