<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

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

    /**
     * The color of the arrows.
     *
     * @var string
     */
    protected $color;

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
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param int $spaceAfter
     */
    public function setSpaceAfter($spaceAfter)
    {
        $this->spaceAfter = $spaceAfter;
    }

    /**
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}
