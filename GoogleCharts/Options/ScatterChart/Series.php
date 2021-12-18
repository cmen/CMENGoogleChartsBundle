<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineWidthTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\PointTrait;

/**
 * @author Christophe Meneses
 */
class Series extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\Series
{
    use LineWidthTrait;

    use PointTrait;

    /**
     * The description of the series to appear in the chart legend.
     *
     * @var string
     */
    protected $labelInLegend;

    /**
     * @return $this
     */
    public function setLabelInLegend(string $labelInLegend)
    {
        $this->labelInLegend = $labelInLegend;

        return $this;
    }
}
