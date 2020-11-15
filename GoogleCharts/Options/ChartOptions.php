<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ChartOptions implements ChartOptionsInterface
{
    use ForceIFrameTrait;

    use HeightTrait;

    use WidthTrait;

    public function __construct()
    {
    }
}
