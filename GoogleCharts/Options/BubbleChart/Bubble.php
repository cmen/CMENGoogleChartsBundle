<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedTextStyle;

/**
 * @author Christophe Meneses
 */
class Bubble
{
    /**
     * The opacity of the bubbles, where 0 is fully transparent and 1 is fully opaque.
     *
     * @var float
     */
    protected $opacity;

    /**
     * The color of the bubbles' stroke.
     *
     * @var string
     */
    protected $stroke;

    /**
     * @var AdvancedTextStyle
     */
    protected $textStyle;


    public function __construct()
    {
        $this->textStyle = new AdvancedTextStyle();
    }


    /**
     * @return AdvancedTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $stroke
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @param float $opacity
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}
