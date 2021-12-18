<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class BasicTooltip extends Tooltip
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
