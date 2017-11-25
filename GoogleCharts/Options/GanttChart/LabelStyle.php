<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;

/**
 * The styles for task labels.
 *
 * @author Christophe Meneses
 */
class LabelStyle
{
    use FontNameTrait;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @var string
     */
    protected $color;

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
