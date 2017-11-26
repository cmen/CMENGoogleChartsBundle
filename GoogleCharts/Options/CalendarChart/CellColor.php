<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeOpacity;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeWidthTrait;

/**
 * cellColor option lets you customize the border of the calendar day squares.
 *
 * @author Christophe Meneses
 */
class CellColor
{
    use StrokeTrait;

    use StrokeOpacity;

    use StrokeWidthTrait;
}
