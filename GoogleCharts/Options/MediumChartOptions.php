<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

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

    use ColorsTrait;

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


    /**
     * MediumChartOptions constructor.
     */
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
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return $this
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
