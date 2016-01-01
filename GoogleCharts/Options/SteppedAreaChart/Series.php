<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    /**
     * Overrides the global areaOpacity for this series.
     *
     * @var float
     */
    protected $areaOpacity;

    /**
     * Overrides the global lineDashStyle value for this series.
     *
     * @var int[]
     */
    protected $lineDashStyle;


    /**
     * @param float $areaOpacity
     *
     * @return Series
     */
    public function setAreaOpacity($areaOpacity)
    {
        $this->areaOpacity = $areaOpacity;

        return $this;
    }

    /**
     * @param int[] $lineDashStyle
     *
     * @return Series
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

        return $this;
    }
}
