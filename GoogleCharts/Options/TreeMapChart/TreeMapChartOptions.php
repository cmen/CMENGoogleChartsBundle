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

    public function __construct()
    {
        parent::__construct();

        $this->textStyle = new MediumTextStyle();
        $this->titleTextStyle = new TitleTextStyle();
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }

    public function getTitleTextStyle(): TitleTextStyle
    {
        return $this->titleTextStyle;
    }

    /**
     * @return $this
     */
    public function setUseWeightedAverageForAggregation(bool $useWeightedAverageForAggregation)
    {
        $this->useWeightedAverageForAggregation = $useWeightedAverageForAggregation;

        return $this;
    }

    /**
     * @return $this
     */
    public function setFontColor(string $fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setFontFamily(string $fontFamily)
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHeaderColor(string $headerColor)
    {
        $this->headerColor = $headerColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHeaderHeight(int $headerHeight)
    {
        $this->headerHeight = $headerHeight;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHeaderHighlightColor(string $headerHighlightColor)
    {
        $this->headerHighlightColor = $headerHighlightColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHighlightOnMouseOver(bool $highlightOnMouseOver)
    {
        $this->highlightOnMouseOver = $highlightOnMouseOver;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHintOpacity(float $hintOpacity)
    {
        $this->hintOpacity = $hintOpacity;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxColor(string $maxColor)
    {
        $this->maxColor = $maxColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxDepth(int $maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxHighlightColor(string $maxHighlightColor)
    {
        $this->maxHighlightColor = $maxHighlightColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxPostDepth(int $maxPostDepth)
    {
        $this->maxPostDepth = $maxPostDepth;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxColorValue(int $maxColorValue)
    {
        $this->maxColorValue = $maxColorValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMidColor(string $midColor)
    {
        $this->midColor = $midColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMidHighlightColor(string $midHighlightColor)
    {
        $this->midHighlightColor = $midHighlightColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinColor(string $minColor)
    {
        $this->minColor = $minColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinHighlightColor(string $minHighlightColor)
    {
        $this->minHighlightColor = $minHighlightColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinColorValue(int $minColorValue)
    {
        $this->minColorValue = $minColorValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function setNoColor(string $noColor)
    {
        $this->noColor = $noColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setNoHighlightColor(string $noHighlightColor)
    {
        $this->noHighlightColor = $noHighlightColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShowScale(bool $showScale)
    {
        $this->showScale = $showScale;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShowTooltips(bool $showTooltips)
    {
        $this->showTooltips = $showTooltips;

        return $this;
    }
}
