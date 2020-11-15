<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait AxisTitlesPositionTrait
{
    /**
     * Where to place the axis titles, compared to the chart area. Supported values :
     * in - Draw the axis titles inside the the chart area.
     * out - Draw the axis titles outside the chart area.
     * none - Omit the axis titles.
     *
     * Default: 'out'
     *
     * @var string
     */
    protected $axisTitlesPosition;

    /**
     * @return $this
     */
    public function setAxisTitlesPosition(string $axisTitlesPosition)
    {
        $this->axisTitlesPosition = $axisTitlesPosition;

        return $this;
    }
}
