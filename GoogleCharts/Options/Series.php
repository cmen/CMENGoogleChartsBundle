<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Series
{
    /**
     * The color to use for this series. Specify a valid HTML color string.
     *
     * @var string
     */
    protected $color;

    /**
     * A boolean value, where true means that the series should have a legend entry,
     * and false means that it should not. Default is true.
     *
     * @var bool
     */
    protected $visibleInLegend;


    /**
     * @param string $color
     *
     * @return Series
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param bool $visibleInLegend
     *
     * @return Series
     */
    public function setVisibleInLegend($visibleInLegend)
    {
        $this->visibleInLegend = $visibleInLegend;

        return $this;
    }
}
