<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait DataOpacityTrait
{
    /**
     * The transparency of data points, with 1.0 being completely opaque and 0.0 fully transparent. In scatter,
     * histogram, bar, and column charts, this refers to the visible data: dots in the scatter chart and rectangles
     * in the others. In charts where selecting data creates a dot, such as the line and area charts, this refers to
     * the circles that appear upon hover or selection. The combo chart exhibits both behaviors, and this option has
     * no effect on other charts. (To change the opacity of a trendline, see
     * {@link https://developers.google.com/chart/interactive/docs/gallery/trendlines#Example4}).
     *
     * Default: 1.0
     *
     * @var float
     */
    protected $dataOpacity;

    /**
     * @return $this
     */
    public function setDataOpacity(float $dataOpacity)
    {
        $this->dataOpacity = $dataOpacity;

        return $this;
    }
}
