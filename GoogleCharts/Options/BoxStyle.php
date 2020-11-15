<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class BoxStyle
{
    use StrokeTrait;

    use StrokeWidthTrait;

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

    public function getGradient(): Gradient
    {
        return $this->gradient;
    }

    /**
     * @return $this
     */
    public function setRx(int $rx)
    {
        $this->rx = $rx;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRy(int $ry)
    {
        $this->ry = $ry;

        return $this;
    }
}
