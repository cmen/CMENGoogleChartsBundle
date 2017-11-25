<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineDashStyleTrait;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    use AreaOpacityTrait;

    use LineDashStyleTrait;
}
