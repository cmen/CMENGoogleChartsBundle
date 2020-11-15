<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait VAxesTrait
{
    /**
     * Specifies properties for individual vertical axes, if the chart has multiple vertical axes. Each child object
     * is a VAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes.
     *
     * @var VAxis[]
     */
    protected $vAxes;

    /**
     * @param VAxis[] $vAxes
     *
     * @return $this
     */
    public function setVAxes(array $vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }
}
