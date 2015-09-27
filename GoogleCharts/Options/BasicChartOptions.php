<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

use CMENGoogleChartsBundle\GoogleCharts\Tools\OptionsFormat;

/**
 * @author Christophe Meneses
 */
class BasicChartOptions
{
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
        $this->optionsFormat = new OptionsFormat();
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
