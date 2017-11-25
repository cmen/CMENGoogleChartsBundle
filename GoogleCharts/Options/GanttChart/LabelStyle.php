<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontSizeTrait;

/**
 * The styles for task labels.
 *
 * @author Christophe Meneses
 */
class LabelStyle
{
    use FontNameTrait;

    use FontSizeTrait;

    /**
     * @var string
     */
    protected $color;

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
