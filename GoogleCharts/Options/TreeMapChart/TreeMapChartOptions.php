<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\TreeMapChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontSizeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;

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

    use FontSizeTrait;

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
     * @var bool
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
     * If null, this value will be the value of maxColor lightened by 35%.
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
     * value or null; if null, this value will be the value of minColor lightened by 35%.
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
     * @var bool
     */
    protected $showScale;

    /**
     * Whether to show tooltips.
     *
     * @var bool
     */
    protected $showTooltips;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    use TitleTrait;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * Whether to use weighted averages for aggregation.
     *
     * @var bool
     */
    protected $useWeightedAverageForAggregation;

    /**
     * TreeMapChartOptions constructor.
     */
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
     * @param bool $useWeightedAverageForAggregation
     *
     * @return $this
     */
    public function setUseWeightedAverageForAggregation($useWeightedAverageForAggregation)
    {
        $this->useWeightedAverageForAggregation = $useWeightedAverageForAggregation;

        return $this;
    }

    /**
     * @param string $fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * @param string $fontFamily
     *
     * @return $this
     */
    public function setFontFamily($fontFamily)
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    /**
     * @param string $headerColor
     *
     * @return $this
     */
    public function setHeaderColor($headerColor)
    {
        $this->headerColor = $headerColor;

        return $this;
    }

    /**
     * @param int $headerHeight
     *
     * @return $this
     */
    public function setHeaderHeight($headerHeight)
    {
        $this->headerHeight = $headerHeight;

        return $this;
    }

    /**
     * @param string $headerHighlightColor
     *
     * @return $this
     */
    public function setHeaderHighlightColor($headerHighlightColor)
    {
        $this->headerHighlightColor = $headerHighlightColor;

        return $this;
    }

    /**
     * @param bool $highlightOnMouseOver
     *
     * @return $this
     */
    public function setHighlightOnMouseOver($highlightOnMouseOver)
    {
        $this->highlightOnMouseOver = $highlightOnMouseOver;

        return $this;
    }

    /**
     * @param float $hintOpacity
     *
     * @return $this
     */
    public function setHintOpacity($hintOpacity)
    {
        $this->hintOpacity = $hintOpacity;

        return $this;
    }

    /**
     * @param string $maxColor
     *
     * @return $this
     */
    public function setMaxColor($maxColor)
    {
        $this->maxColor = $maxColor;

        return $this;
    }

    /**
     * @param int $maxDepth
     *
     * @return $this
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * @param string $maxHighlightColor
     *
     * @return $this
     */
    public function setMaxHighlightColor($maxHighlightColor)
    {
        $this->maxHighlightColor = $maxHighlightColor;

        return $this;
    }

    /**
     * @param int $maxPostDepth
     *
     * @return $this
     */
    public function setMaxPostDepth($maxPostDepth)
    {
        $this->maxPostDepth = $maxPostDepth;

        return $this;
    }

    /**
     * @param int $maxColorValue
     *
     * @return $this
     */
    public function setMaxColorValue($maxColorValue)
    {
        $this->maxColorValue = $maxColorValue;

        return $this;
    }

    /**
     * @param string $midColor
     *
     * @return $this
     */
    public function setMidColor($midColor)
    {
        $this->midColor = $midColor;

        return $this;
    }

    /**
     * @param string $midHighlightColor
     *
     * @return $this
     */
    public function setMidHighlightColor($midHighlightColor)
    {
        $this->midHighlightColor = $midHighlightColor;

        return $this;
    }

    /**
     * @param string $minColor
     *
     * @return $this
     */
    public function setMinColor($minColor)
    {
        $this->minColor = $minColor;

        return $this;
    }

    /**
     * @param string $minHighlightColor
     *
     * @return $this
     */
    public function setMinHighlightColor($minHighlightColor)
    {
        $this->minHighlightColor = $minHighlightColor;

        return $this;
    }

    /**
     * @param int $minColorValue
     *
     * @return $this
     */
    public function setMinColorValue($minColorValue)
    {
        $this->minColorValue = $minColorValue;

        return $this;
    }

    /**
     * @param string $noColor
     *
     * @return $this
     */
    public function setNoColor($noColor)
    {
        $this->noColor = $noColor;

        return $this;
    }

    /**
     * @param string $noHighlightColor
     *
     * @return $this
     */
    public function setNoHighlightColor($noHighlightColor)
    {
        $this->noHighlightColor = $noHighlightColor;

        return $this;
    }

    /**
     * @param bool $showScale
     *
     * @return $this
     */
    public function setShowScale($showScale)
    {
        $this->showScale = $showScale;

        return $this;
    }

    /**
     * @param bool $showTooltips
     *
     * @return $this
     */
    public function setShowTooltips($showTooltips)
    {
        $this->showTooltips = $showTooltips;

        return $this;
    }
}
