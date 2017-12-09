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
     * @var bool
     */
    protected $alwaysOutside;

    /**
     * @param bool $alwaysOutside
     *
     * @return $this
     */
    public function setAlwaysOutside($alwaysOutside)
    {
        $this->alwaysOutside = $alwaysOutside;

        return $this;
    }
}
