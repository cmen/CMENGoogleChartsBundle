<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

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
     * @var boolean
     */
    protected $enable;

    /**
     * The zoom factor of the magnifying glass. Can be any number greater than 0.
     *
     * @var float
     */
    protected $zoomFactor;

    /**
     * @param boolean $enable
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
    }

    /**
     * @param float $zoomFactor
     */
    public function setZoomFactor($zoomFactor)
    {
        $this->zoomFactor = $zoomFactor;
    }
}
