<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    use AreaOpacityTrait;

    /**
     * Overrides the global lineDashStyle value for this series.
     *
     * @var int[]
     */
    protected $lineDashStyle;

    /**
     * @param int[] $lineDashStyle
     *
     * @return $this
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

        return $this;
    }
}
