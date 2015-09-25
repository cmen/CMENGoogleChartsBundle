<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class Tooltip
{
    /**
     *  If set to true, allows the drawing of tooltips to flow outside of the bounds of the chart on all sides.
     *  Note: This only applies to HTML tooltips. If this is enabled with SVG tooltips, any overflow outside of the
     * chart bounds will be cropped. See Customizing Tooltip Content for more details.
     *
     * @var boolean
     */
    protected $ignoreBounds;

    /**
     * If set to true, use HTML-rendered (rather than SVG-rendered) tooltips. See Customizing Tooltip Content for
     * more details.
     * Note: customization of the HTML tooltip content via the tooltip column data role is not supported by the
     * Bubble Chart visualization.
     *
     * @var boolean
     */
    protected $isHtml;

    /**
     * If true, show colored squares next to the series information in the tooltip. The default is true when
     * focusTarget is set to 'category', otherwise the default is false.
     *
     * @var boolean
     */
    protected $showColorCode;

    /**
     * What information to display when the user hovers over a pie slice. The following values are supported :
     * 'both' - [Default] Display both the absolute value of the slice and the percentage of the whole.
     * 'value' - Display only the absolute value of the slice.
     * 'percentage' - Display only the percentage of the whole represented by the slice.
     *
     * @var string
     */
    protected $text;

    /**
     * An object that specifies the tooltip text style.
     *
     * @var TextStyle
     */
    protected $textStyle;

    /**
     * The user interaction that causes the tooltip to be displayed :
     * 'focus' - The tooltip will be displayed when the user hovers over the element.
     * 'none' - The tooltip will not be displayed.
     * 'selection' - The tooltip will be displayed when the user selects the element.
     *
     * @var string
     */
    protected $trigger;


    public function __construct()
    {
        $this->textStyle = new TextStyle();
    }


    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param boolean $ignoreBounds
     */
    public function setIgnoreBounds($ignoreBounds)
    {
        $this->ignoreBounds = $ignoreBounds;
    }

    /**
     * @param boolean $isHtml
     */
    public function setIsHtml($isHtml)
    {
        $this->isHtml = $isHtml;
    }

    /**
     * @param boolean $showColorCode
     */
    public function setShowColorCode($showColorCode)
    {
        $this->showColorCode = $showColorCode;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param string $trigger
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;
    }
}
