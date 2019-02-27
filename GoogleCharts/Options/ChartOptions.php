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

    /**
     * ChartOptions constructor.
     */
    public function __construct()
    {
    }
}
