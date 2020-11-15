<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait LineDashStyleTrait
{
    /**
     * The on-and-off pattern for dashed lines. For instance, [4, 4] will repeat 4-length dashes followed by 4-length
     * gaps, and [5, 1, 3] will repeat a 5-length dash, a 1-length gap, a 3-length dash, a 5-length gap, a 1-length
     * dash, and a 3-length gap. See Dashed Lines for more information.
     *
     * Default: null
     *
     * @var int[]
     */
    protected $lineDashStyle;

    /**
     * @param int[] $lineDashStyle
     *
     * @return $this
     */
    public function setLineDashStyle(array $lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

        return $this;
    }
}
