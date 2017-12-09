<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorTrait;

/**
 * @author Christophe Meneses
 */
class Arrow
{
    /**
     * The angle of the head of the arrow.
     *
     * @var int
     */
    protected $angle;

    use ColorTrait;

    /**
     * The length of the head of the arrow.
     *
     * @var int
     */
    protected $length;

    /**
     * The radius for defining the curve of the arrow between two tasks.
     *
     * @var int
     */
    protected $radius;

    /**
     * The amount of whitespace between the head of an arrow and the task to which it points.
     *
     * @var int
     */
    protected $spaceAfter;

    /**
     * The width of the arrows.
     *
     * @var float
     */
    protected $width;

    /**
     * @param int $angle
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;

        return $this;
    }

    /**
     * @param int $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @param int $radius
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * @param int $spaceAfter
     *
     * @return $this
     */
    public function setSpaceAfter($spaceAfter)
    {
        $this->spaceAfter = $spaceAfter;

        return $this;
    }

    /**
     * @param float $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
