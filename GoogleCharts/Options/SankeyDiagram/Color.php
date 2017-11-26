<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FillOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FillTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeWidthTrait;

/**
 * @author Christophe Meneses
 */
class Color
{
    use FillTrait;

    use FillOpacityTrait;

    use StrokeTrait;

    use StrokeWidthTrait;
}
