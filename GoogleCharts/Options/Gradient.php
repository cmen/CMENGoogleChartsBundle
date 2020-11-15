<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Gradient
{
    /**
     * Start color for gradient.
     *
     * @var string
     */
    protected $color1;

    /**
     * Finish color for gradient.
     *
     * @var string
     */
    protected $color2;

    /**
     * Where on the boundary to start the color1 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $x1;

    /**
     * Where on the boundary to end the color1 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $y1;

    /**
     * Where on the boundary to start the color2 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $x2;

    /**
     * Where on the boundary to end the color2 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $y2;

    /**
     * If true, the boundary for x1, y1, x2, and y2 is the box. If false, it's the entire chart.
     *
     * @var bool
     */
    protected $useObjectBoundingBoxUnits;

    /**
     * @return $this
     */
    public function setColor1(string $color1)
    {
        $this->color1 = $color1;

        return $this;
    }

    /**
     * @return $this
     */
    public function setColor2(string $color2)
    {
        $this->color2 = $color2;

        return $this;
    }

    /**
     * @return $this
     */
    public function setX1(string $x1)
    {
        $this->x1 = $x1;

        return $this;
    }

    /**
     * @return $this
     */
    public function setY1(string $y1)
    {
        $this->y1 = $y1;

        return $this;
    }

    /**
     * @return $this
     */
    public function setX2(string $x2)
    {
        $this->x2 = $x2;

        return $this;
    }

    /**
     * @return $this
     */
    public function setY2(string $y2)
    {
        $this->y2 = $y2;

        return $this;
    }

    /**
     * @return $this
     */
    public function setUseObjectBoundingBoxUnits(bool $useObjectBoundingBoxUnits)
    {
        $this->useObjectBoundingBoxUnits = $useObjectBoundingBoxUnits;

        return $this;
    }
}
