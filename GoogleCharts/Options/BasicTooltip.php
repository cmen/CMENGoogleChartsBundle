<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class BasicTooltip extends Tooltip
{
    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    use TriggerTrait;

    public function __construct()
    {
        $this->textStyle = new MediumTextStyle();
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }
}
