<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedAnnotations extends Annotations
{
    /**
     * if set to true, draws all annotations outside of the chart.
     *
     * @var boolean
     */
    protected $alwaysOutside;

    /**
     * @param boolean $alwaysOutside
     */
    public function setAlwaysOutside($alwaysOutside)
    {
        $this->alwaysOutside = $alwaysOutside;
    }
}
