<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

/**
 * @author Christophe Meneses
 */
trait MaterialTrait
{
    /**
     * @var Chart
     */
    protected $chart;

    /**
     * @var array<mixed>
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
     * @param array<mixed> $axes
     *
     * @return $this
     */
    public function setAxes(array $axes)
    {
        $this->axes = $axes;

        return $this;
    }
}
