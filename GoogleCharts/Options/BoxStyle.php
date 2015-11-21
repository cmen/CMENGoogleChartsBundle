<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

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
     *
     * @return BoxStyle
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @param int $strokeWidth
     *
     * @return BoxStyle
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

    /**
     * @param int $rx
     *
     * @return BoxStyle
     */
    public function setRx($rx)
    {
        $this->rx = $rx;

        return $this;
    }

    /**
     * @param int $ry
     *
     * @return BoxStyle
     */
    public function setRy($ry)
    {
        $this->ry = $ry;

        return $this;
    }
}
