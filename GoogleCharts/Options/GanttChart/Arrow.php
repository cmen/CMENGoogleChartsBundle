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
     * @return $this
     */
    public function setAngle(int $angle)
    {
        $this->angle = $angle;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLength(int $length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRadius(int $radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSpaceAfter(int $spaceAfter)
    {
        $this->spaceAfter = $spaceAfter;

        return $this;
    }

    /**
     * @return $this
     */
    public function setWidth(float $width)
    {
        $this->width = $width;

        return $this;
    }
}
