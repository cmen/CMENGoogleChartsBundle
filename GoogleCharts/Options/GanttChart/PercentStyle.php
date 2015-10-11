<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class PercentStyle
{
    /**
     * The color of the percentage completed portion of a task bar.
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
