<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Events;

interface EventsOutputInterface
{
    /**
     * Returns a string to draw events of a chart.
     */
    public function draw(Events $events, string $chartName): string;
}
