<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait SeriesTrait
{
    /**
     * An array of Series object, each describing the format of the corresponding series in the chart. To use default
     * values for a series, specify a null value. If a series or a value is not specified, the global value
     * will be used.
     *
     * You can specify either an array of Series object, each of which applies to the series in the order given,
     * or you can specify an array where each child has a numeric key indicating which series it applies to.
     * For example, the following two declarations are identical :
     *
     * $chart->getOptions()->setSeries([$series1, null, $series3]);
     * $chart->getOptions()->setSeries([0 => $series1, 2 => $series3])
     *
     * @var array<mixed>|Series[]
     */
    protected $series;

    /**
     * @param array<mixed>|Series[] $series
     *
     * @return $this
     */
    public function setSeries(array $series)
    {
        $this->series = $series;

        return $this;
    }
}
