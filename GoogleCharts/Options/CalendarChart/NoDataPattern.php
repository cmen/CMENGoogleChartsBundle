<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

/**
 * Calendar charts use a striped diagonal pattern to indicate that there is no data for a particular day. Use the
 * noDataPattern.backgroundColor and noDataPattern.color options to override the grayscale defaults.
 *
 * @author Christophe Meneses
 */
class NoDataPattern
{
    /**
     * @var string
     */
    protected $backgroundColor;

    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
