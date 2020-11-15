<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnnotations;

/**
 * @author Christophe Meneses
 */
class Series extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\Series
{
    /**
     * @var AdvancedAnnotations
     */
    protected $annotations;

    /**
     * Which axis to assign this series to, where 0 is the default axis, and 1 is the opposite axis. Default value
     * is 0; set to 1 to define a chart where different series are rendered against different axes. At least one series
     * much be allocated to the default axis. You can define a different scale for different axes.
     *
     * @var int
     */
    protected $targetAxisIndex;

    public function __construct()
    {
        $this->annotations = new AdvancedAnnotations();
    }

    public function getAnnotations(): AdvancedAnnotations
    {
        return $this->annotations;
    }

    /**
     * @return $this
     */
    public function setTargetAxisIndex(int $targetAxisIndex)
    {
        $this->targetAxisIndex = $targetAxisIndex;

        return $this;
    }
}
