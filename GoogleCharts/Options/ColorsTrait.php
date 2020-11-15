<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ColorsTrait
{
    /**
     * The colors to use for the chart elements. An array of strings, where each element is an HTML color string,
     * for example : ['red', '#004411'].
     *
     * @var string[]
     */
    protected $colors;

    /**
     * @param string[] $colors
     *
     * @return $this
     */
    public function setColors(array $colors)
    {
        $this->colors = $colors;

        return $this;
    }
}
