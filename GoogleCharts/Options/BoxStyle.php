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

    /**
     * BoxStyle constructor.
     */
    public function __construct()
    {
        $this->gradient = new Gradient();
    }

    /**
     * @return Gradient
     */
    public function getGradient()
    {
        return $this->gradient;
    }

    /**
     * @param int $rx
     *
     * @return $this
     */
    public function setRx($rx)
    {
        $this->rx = $rx;

        return $this;
    }

    /**
     * @param int $ry
     *
     * @return $this
     */
    public function setRy($ry)
    {
        $this->ry = $ry;

        return $this;
    }
}
