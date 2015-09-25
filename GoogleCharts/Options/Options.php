<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

use CMENGoogleChartsBundle\GoogleCharts\Tools\OptionsFormat;

class Options
{
    /**
     * The background color for the main area of the chart. Can be either a simple HTML color string, for example :
     * 'red' or '#00cc00', or a BackgroundColor object.
     *
     * @var string|BackgroundColor
     */
    protected $backgroundColor;

    /**
     * An object with members to configure the placement and size of the chart area (where the chart itself is drawn,
     * excluding axis and legends).
     *
     * @var ChartArea
     */
    protected $chartArea;

    /**
     * The colors to use for the chart elements. An array of strings, where each element is an HTML color string,
     * for example : ['red', '#004411']
     *
     * @var array
     */
    protected $colors;

    /**
     * Whether the chart throws user-based events or reacts to user interaction. If false, the chart will not throw
     * 'select' or other interaction-based events (but will throw ready or error events), and will not display
     * hovertext or otherwise change depending on user input.
     *
     * @var boolean
     */
    protected $enableInteractivity;

    /**
     * Draws the chart inside an inline frame. (Note that on IE8, this option is ignored; all IE8 charts are drawn
     * in i-frames.)
     *
     * @var boolean
     */
    protected $forceIFrame;

    /**
     * Height of the chart, in pixels.
     *
     * @var int
     */
    protected $height;

    /**
     * An object with members to configure various aspects of the legend.
     *
     * @var Legend
     */
    protected $legend;

    /**
     * Text to display above the chart.
     *
     * @var string
     */
    protected $title;

    /**
     * An object that specifies the title text style.
     *
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * An object with members to configure various tooltip elements.
     *
     * @var Tooltip
     */
    protected $tooltip;

    /**
     * Width of the chart, in pixels.
     *
     * @var int
     */
    protected $width;

    /**
     * @var OptionsFormat
     */
    private $optionsFormat;


    public function __construct()
    {
        $this->backgroundColor = new BackgroundColor();
        $this->chartArea = new ChartArea();
        $this->legend = new Legend();
        $this->tooltip = new Tooltip();
        $this->optionsFormat = new OptionsFormat();
        $this->titleTextStyle = new TitleTextStyle();
    }


    /**
     * Returns Javascript of options. 3 levels of options are possible. A level of option can be a class of option,
     * a string or an array. If an option have a null value, an empty array or an empty class, it is not returned :
     * the default value will be applied.
     *
     * @return string Javascript
     */
    public function draw()
    {
        $options = $this;

        $this->optionsFormat->removeRecursivelyNullValue($options);

        $this->optionsFormat->removeRecursivelyEmptyArray($options);

        $this->optionsFormat->renameRecursivelyKeys($options);

        return "var options = " . json_encode($options) . ";\n";
    }


    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return Tooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return BackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return ChartArea
     */
    public function getChartArea()
    {
        return $this->chartArea;
    }

    /**
     * @return TitleTextStyle
     */
    public function getTitleTextStyle()
    {
        return $this->titleTextStyle;
    }

    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param array $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @param boolean $enableInteractivity
     */
    public function setEnableInteractivity($enableInteractivity)
    {
        $this->enableInteractivity = $enableInteractivity;
    }

    /**
     * @param boolean $forceIFrame
     */
    public function setForceIFrame($forceIFrame)
    {
        $this->forceIFrame = $forceIFrame;
    }
}
