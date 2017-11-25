<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontSizeTrait;

/**
 * @author Christophe Meneses
 */
class PieSliceTextStyle
{
    /**
     * The color can be any HTML color string, for example: 'red' or '#00cc00'.
     *
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
