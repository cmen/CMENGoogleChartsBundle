<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

/**
 * Trait MaterialTrait.
 *
 * @author Christophe Meneses
 */
trait MaterialTrait
{
    /**
     * @var Chart
     */
    protected $chart;

    /**
     * @var array
     */
    protected $axes;

    /**
     * @return Chart
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * @param array $axes
     *
     * @return $this
     */
    public function setAxes($axes)
    {
        $this->axes = $axes;

        return $this;
    }
}
