<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class ChartArea
{
    /**
     * Chart area background color. Two formats are supported: a number, or a number followed by %. A simple number
     * is a value in pixels; a number followed by % is a percentage.
     *
     * @var BackgroundColor
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
        $this->backgroundColor = new BackgroundColor();
    }


    /**
     * @return BackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param int|string $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param int|string $left
     */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
     * @param int|string $top
     */
    public function setTop($top)
    {
        $this->top = $top;
    }

    /**
     * @param int|string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}
