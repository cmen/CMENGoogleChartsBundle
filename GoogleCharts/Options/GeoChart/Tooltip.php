<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TriggerTrait;

/**
 * @author Christophe Meneses
 */
class Tooltip
{
    use TriggerTrait;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    public function __construct()
    {
        $this->textStyle = new MediumTextStyle();
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }
}
