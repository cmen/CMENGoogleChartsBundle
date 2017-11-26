<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class LineSeries extends AdvancedSeries
{
    use LineDashStyleTrait;

    use LineWidthTrait;

    use PointTrait;
}
