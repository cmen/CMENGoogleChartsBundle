<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class BoxStyle
{
    /**
     * Color of the box outline.
     *
     * @var string
     */
    protected $stroke;

    /**
     * Thickness of the box outline.
     *
     * @var int
     */
    protected $strokeWidth;

    /**
     *  x-radius of the corner curvature.
     *
     * @var int
     */
    protected $rx;

    /**
     * y-radius of the corner curvature.
     *
     * @var int
     */
    protected $ry;

    /**
     * @var Gradient
     */
    protected $gradient;


    public function __construct()
    {
        $this->gradient = new Gradient();
    }


    /**
     * @param string $stroke
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @param int $strokeWidth
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
    }

    /**
     * @param int $rx
     */
    public function setRx($rx)
    {
        $this->rx = $rx;
    }

    /**
     * @param int $ry
     */
    public function setRy($ry)
    {
        $this->ry = $ry;
    }
}
