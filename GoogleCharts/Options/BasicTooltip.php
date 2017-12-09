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
