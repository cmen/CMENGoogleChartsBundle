<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MediumChartOptions extends BasicChartOptions
{
    /**
     * The background color for the main area of the chart. Can be either a simple HTML color string, for example :
     * 'red' or '#00cc00', or a BackgroundColor object.
     *
     * @var string|AdvancedBackgroundColor
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
     * The default font size, in pixels, of all text in the chart. You can override this using properties for specific
     * chart elements.
     *
     * @var int
     */
    protected $fontSize;

    /**
     * The default font face for all text in the chart. You can override this using properties for specific chart
     * elements.
     *
     * @var string
     */
    protected $fontName;

    /**
     * Text to display above the chart.
     *
     * @var string
     */
    protected $title;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;


    public function __construct()
    {
        parent::__construct();

        $this->backgroundColor = new AdvancedBackgroundColor();
        $this->chartArea = new ChartArea();
        $this->titleTextStyle = new TitleTextStyle();
    }


    /**
     * @return AdvancedBackgroundColor
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
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @param array $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @param string $fontName
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;
    }

    /**
     * @param int $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }
}
