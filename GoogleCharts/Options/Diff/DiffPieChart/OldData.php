<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\OpacityTrait;

/**
 * @author Christophe Meneses
 */
class OldData
{
    use OpacityTrait;

    /**
     * If false, the oldest data surrounds the newest data.
     *
     * @var bool
     */
    protected $inCenter;

    /**
     * @return $this
     */
    public function setInCenter(bool $inCenter)
    {
        $this->inCenter = $inCenter;

        return $this;
    }
}
