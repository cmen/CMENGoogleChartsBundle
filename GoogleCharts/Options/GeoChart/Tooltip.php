<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;

/**
 * @author Christophe Meneses
 */
class BasicTooltip
{
    /**
     * @var MediumTextStyle
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
        $this->textStyle = new MediumTextStyle();
    }

    /**
     * @return MediumTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $trigger
     *
     * @return BasicTooltip
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }
}
