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

    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
