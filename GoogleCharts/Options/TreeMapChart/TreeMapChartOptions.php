<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\TreeMapChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTextStyle;

/**
 * @author Christophe Meneses
 */
class TreeMapChartOptions extends ChartOptions
{
    /**
     * The text color. Specify an HTML color value.
     *
     * @var string
     */
    protected $fontColor;

    /**
     * The font family to use for all text.
     *
     * @var string
     */
    protected $fontFamily;

    /**
     * The font size for all text, in points.
     *
     * @var int
     */
    protected $fontSize;

    /**
     * The color of the header section for each node. Specify an HTML color value.
     *
     * @var string
     */
    protected $headerColor;

    /**
     * The height of the header section for each node, in pixels (can be zero).
     *
     * @var int
     */
    protected $headerHeight;

    /**
     * The color of the header of a node being hovered over. Specify an HTML color value or null; if null this value
     * will be headerColor lightened by 35%.
     *
     * @var string
     */
    protected $headerHighlightColor;

    /**
     * Determines if elements should show highlighted effects when moused over. If set to true, highlighting for
     * different elements can be specified using the various highlightColor options.
     *
     * @var boolean
     */
    protected $highlightOnMouseOver;

    /**
     * When maxPostDepth is greater than 1, causing nodes below the current depth to be shown, hintOpacity specifies
     * how transparent it should be. It should be between 0 and 1; the higher the value, the fainter the node.
     *
     * @var float
     */
    protected $hintOpacity;

    /**
     * The color for a rectangle with a column 3 value of maxColorValue. Specify an HTML color value.
     *
     * @var string
     */
    protected $maxColor;

    /**
     * The maximum number of node levels to show in the current view. Levels will be flattened into the current plane.
     * If your tree has more levels than this, you will have to go up or down to see them. You can additionally see
     * maxPostDepth levels below this as shaded rectangles within these nodes.
     *
     * @var int
     */
    protected $maxDepth;

    /**
     * The highlight color to use for the node with the largest value in column 3. Specify an HTML color value or null;
     * If null, this value will be the value of maxColor lightened by 35%
     *
     * @var string
     */
    protected $maxHighlightColor;

    /**
     * How many levels of nodes beyond maxDepth to show in "hinted" fashion. Hinted nodes are shown as shaded
     * rectangles within a node that is within the maxDepth limit.
     *
     * @var int
     */
    protected $maxPostDepth;

    /**
     * The maximum value allowed in column 3. All values greater than this will be trimmed to this value. If set to
     * null, it will be set to the max value in the column.
     *
     * @var int
     */
    protected $maxColorValue;

    /**
     * The color for a rectangle with a column 3 value midway between maxColorValue and minColorValue. Specify an HTML
     * color value.
     *
     * @var string
     */
    protected $midColor;

    /**
     * The highlight color to use for the node with a column 3 value near the median of minColorValue and maxColorValue.
     * Specify an HTML color value or null; if null, this value will be the value of midColor lightened by 35%.
     *
     * @var string
     */
    protected $midHighlightColor;

    /**
     * The color for a rectangle with the column 3 value of minColorValue. Specify an HTML color value.
     *
     * @var string
     */
    protected $minColor;

    /**
     * The highlight color to use for the node with a column 3 value nearest to minColorValue. Specify an HTML color
     * value or null; if null, this value will be the value of minColor lightened by 35%
     *
     * @var string
     */
    protected $minHighlightColor;

    /**
     * The minimum value allowed in column 3. All values less than this will be trimmed to this value. If set to null,
     * it will be calculated as the minimum value in the column.
     *
     * @var int
     */
    protected $minColorValue;

    /**
     * The color to use for a rectangle when a node has no value for column 3, and that node is a leaf (or contains
     * only leaves). Specify an HTML color value.
     *
     * @var string
     */
    protected $noColor;

    /**
     * The color to use for a rectangle of "no" color when highlighted. Specify an HTML color value or null; if null,
     * this will be the value of noColor lightened by 35%.
     *
     * @var string
     */
    protected $noHighlightColor;

    /**
     * Whether or not to show a color gradient scale from minColor to maxColor along the top of the chart. Specify
     * true to show the scale.
     *
     * @var boolean
     */
    protected $showScale;

    /**
     * Whether to show tooltips.
     *
     * @var boolean
     */
    protected $showTooltips;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

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
     * Whether to use weighted averages for aggregation.
     *
     * @var boolean
     */
    protected $useWeightedAverageForAggregation;


    public function __construct()
    {
        parent::__construct();

        $this->textStyle = new MediumTextStyle();
        $this->titleTextStyle = new TitleTextStyle();
    }


    /**
     * @return MediumTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @return TitleTextStyle
     */
    public function getTitleTextStyle()
    {
        return $this->titleTextStyle;
    }

    /**
     * @param boolean $useWeightedAverageForAggregation
     *
     * @return TreeMapChartOptions
     */
    public function setUseWeightedAverageForAggregation($useWeightedAverageForAggregation)
    {
        $this->useWeightedAverageForAggregation = $useWeightedAverageForAggregation;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return TreeMapChartOptions
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $fontColor
     *
     * @return TreeMapChartOptions
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * @param string $fontFamily
     *
     * @return TreeMapChartOptions
     */
    public function setFontFamily($fontFamily)
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return TreeMapChartOptions
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param string $headerColor
     *
     * @return TreeMapChartOptions
     */
    public function setHeaderColor($headerColor)
    {
        $this->headerColor = $headerColor;

        return $this;
    }

    /**
     * @param int $headerHeight
     *
     * @return TreeMapChartOptions
     */
    public function setHeaderHeight($headerHeight)
    {
        $this->headerHeight = $headerHeight;

        return $this;
    }

    /**
     * @param string $headerHighlightColor
     *
     * @return TreeMapChartOptions
     */
    public function setHeaderHighlightColor($headerHighlightColor)
    {
        $this->headerHighlightColor = $headerHighlightColor;

        return $this;
    }

    /**
     * @param boolean $highlightOnMouseOver
     *
     * @return TreeMapChartOptions
     */
    public function setHighlightOnMouseOver($highlightOnMouseOver)
    {
        $this->highlightOnMouseOver = $highlightOnMouseOver;

        return $this;
    }

    /**
     * @param float $hintOpacity
     *
     * @return TreeMapChartOptions
     */
    public function setHintOpacity($hintOpacity)
    {
        $this->hintOpacity = $hintOpacity;

        return $this;
    }

    /**
     * @param string $maxColor
     *
     * @return TreeMapChartOptions
     */
    public function setMaxColor($maxColor)
    {
        $this->maxColor = $maxColor;

        return $this;
    }

    /**
     * @param int $maxDepth
     *
     * @return TreeMapChartOptions
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * @param string $maxHighlightColor
     *
     * @return TreeMapChartOptions
     */
    public function setMaxHighlightColor($maxHighlightColor)
    {
        $this->maxHighlightColor = $maxHighlightColor;

        return $this;
    }

    /**
     * @param int $maxPostDepth
     *
     * @return TreeMapChartOptions
     */
    public function setMaxPostDepth($maxPostDepth)
    {
        $this->maxPostDepth = $maxPostDepth;

        return $this;
    }

    /**
     * @param int $maxColorValue
     *
     * @return TreeMapChartOptions
     */
    public function setMaxColorValue($maxColorValue)
    {
        $this->maxColorValue = $maxColorValue;

        return $this;
    }

    /**
     * @param string $midColor
     *
     * @return TreeMapChartOptions
     */
    public function setMidColor($midColor)
    {
        $this->midColor = $midColor;

        return $this;
    }

    /**
     * @param string $midHighlightColor
     *
     * @return TreeMapChartOptions
     */
    public function setMidHighlightColor($midHighlightColor)
    {
        $this->midHighlightColor = $midHighlightColor;

        return $this;
    }

    /**
     * @param string $minColor
     *
     * @return TreeMapChartOptions
     */
    public function setMinColor($minColor)
    {
        $this->minColor = $minColor;

        return $this;
    }

    /**
     * @param string $minHighlightColor
     *
     * @return TreeMapChartOptions
     */
    public function setMinHighlightColor($minHighlightColor)
    {
        $this->minHighlightColor = $minHighlightColor;

        return $this;
    }

    /**
     * @param int $minColorValue
     *
     * @return TreeMapChartOptions
     */
    public function setMinColorValue($minColorValue)
    {
        $this->minColorValue = $minColorValue;

        return $this;
    }

    /**
     * @param string $noColor
     *
     * @return TreeMapChartOptions
     */
    public function setNoColor($noColor)
    {
        $this->noColor = $noColor;

        return $this;
    }

    /**
     * @param string $noHighlightColor
     *
     * @return TreeMapChartOptions
     */
    public function setNoHighlightColor($noHighlightColor)
    {
        $this->noHighlightColor = $noHighlightColor;

        return $this;
    }

    /**
     * @param boolean $showScale
     *
     * @return TreeMapChartOptions
     */
    public function setShowScale($showScale)
    {
        $this->showScale = $showScale;

        return $this;
    }

    /**
     * @param boolean $showTooltips
     *
     * @return TreeMapChartOptions
     */
    public function setShowTooltips($showTooltips)
    {
        $this->showTooltips = $showTooltips;

        return $this;
    }
}
