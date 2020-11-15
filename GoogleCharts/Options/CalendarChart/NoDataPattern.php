<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorTrait;

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

    use ColorTrait;

    /**
     * @return $this
     */
    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
