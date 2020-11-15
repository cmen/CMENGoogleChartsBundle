<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TextStyle;

/**
 * @author Christophe Meneses
 */
class Legend
{
    /**
     * Position of the legend. Can be one of the following :
     *  'top' - Above the chart.
     *  'bottom' - Below the chart.
     *  'in' - Inside the chart, at the top.
     *  'none' - No legend is displayed.
     *
     * @var string
     */
    protected $position;

    /**
     * @var TextStyle
     */
    protected $textStyle;

    public function getTextStyle(): TextStyle
    {
        return $this->textStyle;
    }

    /**
     * @return $this
     */
    public function setPosition(string $position)
    {
        $this->position = $position;

        return $this;
    }
}
