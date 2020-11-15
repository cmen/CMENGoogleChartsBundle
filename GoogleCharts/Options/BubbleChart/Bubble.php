<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\StrokeTrait;

/**
 * @author Christophe Meneses
 */
class Bubble
{
    use OpacityTrait;

    use StrokeTrait;

    /**
     * @var AdvancedTextStyle
     */
    protected $textStyle;

    public function __construct()
    {
        $this->textStyle = new AdvancedTextStyle();
    }

    public function getTextStyle(): AdvancedTextStyle
    {
        return $this->textStyle;
    }
}
