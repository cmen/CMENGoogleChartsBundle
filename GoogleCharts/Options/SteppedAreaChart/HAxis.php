<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ViewWindow;

/**
 * @author Christophe Meneses
 */
class HAxis
{
    /**
     * If false, will hide outermost labels rather than allow them to be cropped by the chart container. If true,
     * will allow label cropping.
     *
     * @var bool
     */
    protected $allowContainerBoundaryTextCufoff;

    /**
     * The direction in which the values along the horizontal axis grow. Specify -1 to reverse the order of the values
     * or 1 for normal order.
     *
     * @var int
     */
    protected $direction;

    /**
     * If true, draw the horizontal axis text at an angle, to help fit more text along the axis; if false, draw
     * horizontal axis text upright. Default behavior is to slant text if it cannot all fit when drawn upright.
     * Notice that this option is available only when the hAxis.textPosition is set to 'out' (which is the default).
     *
     * @var bool
     */
    protected $slantedText;

    /**
     * The angle of the horizontal axis text, if it's drawn slanted. Ignored if hAxis.slantedText is false, or is in
     * auto mode, and the chart decided to draw the text horizontally.
     *
     * @var int
     */
    protected $slantedTextAngle;

    /**
     * Maximum number of levels of horizontal axis text. If axis text labels become too crowded, the server might
     * shift neighboring labels up or down in order to fit labels closer together. This value specifies the most
     * number of levels to use; the server can use fewer levels, if labels can fit without overlapping.
     *
     * @var int
     */
    protected $maxAlternation;

    /**
     * Maximum number of lines allowed for the text labels. Labels can span multiple lines if they are too long,
     * and the nuber of lines is, by default, limited by the height of the available space.
     *
     * @var int
     */
    protected $maxTextLines;

    /**
     * Minimum horizontal spacing, in pixels, allowed between two adjacent text labels. If the labels are spaced too
     * densely, or they are too long, the spacing can drop below this threshold, and in this case one of the
     * label-unclutter measures will be applied (e.g, truncating the lables or dropping some of them).
     *
     * @var int
     */
    protected $minTextSpacing;

    /**
     * How many horizontal axis labels to show, where 1 means show every label, 2 means show every other label,
     * and so on. Default is to try to show as many labels as possible without overlapping.
     *
     * @var int
     */
    protected $showTextEvery;

    /**
     * Position of the horizontal axis text, relative to the chart area. Supported values: 'out', 'in', 'none'.
     *
     * @var string
     */
    protected $textPosition;

    /**
     * @var TextStyle
     */
    protected $textStyle;

    /**
     * Replaces the automatically generated X-axis ticks with the specified array. Each element of the array should be
     * either a valid tick value (such as a number, date, datetime, or timeofday), or an array. If it's an array, it
     * should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     * [5, 10, 15, 20]
     * [['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four']].
     *
     * This option is only supported for a continuous axis.
     *
     * @var array<mixed>
     */
    protected $ticks;

    use TitleTrait;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * @var ViewWindow
     */
    protected $viewWindow;

    public function __construct()
    {
        $this->textStyle = new TextStyle();
        $this->titleTextStyle = new TitleTextStyle();
        $this->viewWindow = new ViewWindow();
    }

    public function getTextStyle(): TextStyle
    {
        return $this->textStyle;
    }

    public function getTitleTextStyle(): TitleTextStyle
    {
        return $this->titleTextStyle;
    }

    public function getViewWindow(): ViewWindow
    {
        return $this->viewWindow;
    }

    /**
     * @param array<mixed> $ticks
     *
     * @return $this
     */
    public function setTicks(array $ticks)
    {
        $this->ticks = $ticks;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDirection(int $direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShowTextEvery(int $showTextEvery)
    {
        $this->showTextEvery = $showTextEvery;

        return $this;
    }

    /**
     * @return $this
     */
    public function setAllowContainerBoundaryTextCufoff(bool $allowContainerBoundaryTextCufoff)
    {
        $this->allowContainerBoundaryTextCufoff = $allowContainerBoundaryTextCufoff;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSlantedText(bool $slantedText)
    {
        $this->slantedText = $slantedText;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSlantedTextAngle(int $slantedTextAngle)
    {
        $this->slantedTextAngle = $slantedTextAngle;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxAlternation(int $maxAlternation)
    {
        $this->maxAlternation = $maxAlternation;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxTextLines(int $maxTextLines)
    {
        $this->maxTextLines = $maxTextLines;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinTextSpacing(int $minTextSpacing)
    {
        $this->minTextSpacing = $minTextSpacing;

        return $this;
    }

    /**
     * @return $this
     */
    public function setTextPosition(string $textPosition)
    {
        $this->textPosition = $textPosition;

        return $this;
    }
}
