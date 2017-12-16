<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Events;

interface EventsOutputInterface
{
    /**
     * Returns a string to draw events of a chart.
     *
     * @param Events $events
     * @param string $chartName
     *
     * @return string
     */
    public function draw(Events $events, $chartName);
}
