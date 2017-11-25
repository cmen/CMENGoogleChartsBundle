<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;

/**
 * @author Christophe Meneses
 */
class BarLabelStyle
{
    use FontNameTrait;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
