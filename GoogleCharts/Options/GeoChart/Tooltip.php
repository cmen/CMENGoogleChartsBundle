<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\TextStyle;

/**
 * @author Christophe Meneses
 */
class BasicTooltip
{
    /**
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
     * @param string $trigger
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;
    }
}
