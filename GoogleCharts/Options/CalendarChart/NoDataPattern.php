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
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
