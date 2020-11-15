<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait AreaOpacityTrait
{
    /**
     * The default opacity of the colored area under an area chart series, where 0.0 is fully transparent and 1.0 is
     * fully opaque. To specify opacity for an individual series, set the areaOpacity value in the series property.
     *
     * Default: 0.3
     *
     * @var float
     */
    protected $areaOpacity;

    /**
     * @return $this
     */
    public function setAreaOpacity(float $areaOpacity)
    {
        $this->areaOpacity = $areaOpacity;

        return $this;
    }
}
