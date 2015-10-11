<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class InnerGridTrack
{
    /**
     * The fill color of the inner grid track. If no innerGridDarkTrack.fill is specified, this will be applied to
     * every grid track.
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
