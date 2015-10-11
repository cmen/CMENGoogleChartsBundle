<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class InnerGridDarkTrack
{
    /**
     * The fill color of the alternate, dark inner grid track.
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
