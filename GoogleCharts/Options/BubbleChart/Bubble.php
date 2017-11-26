<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeTrait;

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

    use StrokeTrait;

    /**
     * @var AdvancedTextStyle
     */
    protected $textStyle;


    /**
     * Bubble constructor.
     */
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
     * @param float $opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }
}
