<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedSeries extends Series
{
    /**
     * Which axis to assign this series to, where 0 is the default axis, and 1 is the opposite axis. Default value is
     * 0; set to 1 to define a chart where different series are rendered against different axes. At least one series
     * much be allocated to the default axis. You can define a different scale for different axes.
     *
     * @var int
     */
    protected $targetAxisIndex;

    /**
     * The description of the series to appear in the chart legend.
     *
     * @var string
     */
    protected $labelInLegend;

    /**
     * @return $this
     */
    public function setTargetAxisIndex(int $targetAxisIndex)
    {
        $this->targetAxisIndex = $targetAxisIndex;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLabelInLegend(string $labelInLegend)
    {
        $this->labelInLegend = $labelInLegend;

        return $this;
    }
}
