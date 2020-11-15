<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MagnifyingGlass
{
    /**
     * If true, when the user lingers over a cluttered marker, a magnifiying glass will be opened.
     *
     * Note: this feature is not supported in browsers that do not support SVG, i.e. Internet Explorer version 8 or
     * earlier.
     *
     * @var bool
     */
    protected $enable;

    /**
     * The zoom factor of the magnifying glass. Can be any number greater than 0.
     *
     * @var float
     */
    protected $zoomFactor;

    /**
     * @return $this
     */
    public function setEnable(bool $enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * @return $this
     */
    public function setZoomFactor(float $zoomFactor)
    {
        $this->zoomFactor = $zoomFactor;

        return $this;
    }
}
