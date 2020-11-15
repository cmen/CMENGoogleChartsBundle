<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ChartArea
{
    /**
     * Chart area background color. When a string is used, it can be either a hex string (e.g., '#fdc') or an
     * English color name. When an object is used, the following properties can be provided :
     *   stroke: the color, provided as a hex string or English color name.
     *   strokeWidth: if provided, draws a border around the chart area of the given width and with the color of stroke.
     *
     * @var string|BasicBackgroundColor
     */
    protected $backgroundColor;

    /**
     * Chart area height.
     * Two formats are supported: a number, or a number followed by %. A simple number is a value in pixels;
     * a number followed by % is a percentage.
     *
     * @var string|int
     */
    protected $height;

    /**
     * How far to draw the chart from the left border. Two formats are supported: a number, or a number followed by %.
     * A simple number is a value in pixels; a number followed by % is a percentage.
     *
     * @var string|int
     */
    protected $left;

    /**
     * How far to draw the chart from the top border.Two formats are supported: a number, or a number followed by %.
     * A simple number is a value in pixels; a number followed by % is a percentage.
     *
     * @var string|int
     */
    protected $top;

    /**
     * Chart area width. Two formats are supported: a number, or a number followed by %.
     * A simple number is a value in pixels; a number followed by % is a percentage.
     *
     * @var string|int
     */
    protected $width;

    public function __construct()
    {
        $this->backgroundColor = new BasicBackgroundColor();
    }

    /**
     * @return string|BasicBackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param int|string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param int|string $left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * @param int|string $top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * @param int|string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return $this
     */
    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
