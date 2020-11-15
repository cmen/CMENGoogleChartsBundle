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
     * @return $this
     */
    public function setAuraColor(string $auraColor)
    {
        $this->auraColor = $auraColor;

        return $this;
    }
}
