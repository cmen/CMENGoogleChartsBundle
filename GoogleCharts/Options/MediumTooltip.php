<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MediumTooltip extends BasicTooltip
{
    /**
     * If true, show colored squares next to the series information in the tooltip. The default is true when
     * focusTarget is set to 'category', otherwise the default is false.
     *
     * @var bool
     */
    protected $showColorCode;

    /**
     * @return $this
     */
    public function setShowColorCode(bool $showColorCode)
    {
        $this->showColorCode = $showColorCode;

        return $this;
    }
}
