<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontSizeTrait;

/**
 * @author Christophe Meneses
 */
class RowLabelStyle
{
    /**
     * @var string
     */
    protected $color;

    use FontNameTrait;

    use FontSizeTrait;

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
