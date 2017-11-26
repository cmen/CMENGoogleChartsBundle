<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedTextStyle extends MediumTextStyle
{
    /**
     * Color of the text outline.
     *
     * @var string
     */
    protected $auraColor;

    use OpacityTrait;

    /**
     * @param string $auraColor
     *
     * @return $this
     */
    public function setAuraColor($auraColor)
    {
        $this->auraColor = $auraColor;

        return $this;
    }
}
