<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ForceIFrameTrait
{
    /**
     * Draws the chart inside an inline frame. (Note that on IE8, this option is ignored; all IE8 charts are drawn
     * in i-frames.).
     *
     * Default: false
     *
     * @var bool
     */
    protected $forceIFrame;

    /**
     * @return $this
     */
    public function setForceIFrame(bool $forceIFrame)
    {
        $this->forceIFrame = $forceIFrame;

        return $this;
    }
}
