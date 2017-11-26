<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TriggerTrait;

/**
 * @author Christophe Meneses
 */
class BasicTooltip
{
    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    use TriggerTrait;

    /**
     * BasicTooltip constructor.
     */
    public function __construct()
    {
        $this->textStyle = new MediumTextStyle();
    }

    /**
     * @return MediumTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }
}
