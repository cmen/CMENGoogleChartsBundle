<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ThemeTrait
{
    /**
     * A theme is a set of predefined option values that work together to achieve a specific chart behavior or visual
     * effect. Currently only one theme is available :
     * 'maximized' - Maximizes the area of the chart, and draws the legend and all of the labels inside the chart area.
     *   Sets the following options:
     *   chartArea: {width: '100%', height: '100%'},
     *   legend: {position: 'in'},
     *   titlePosition: 'in', axisTitlesPosition: 'in',
     *   hAxis: {textPosition: 'in'}, vAxis: {textPosition: 'in'}.
     *
     * Default: null
     *
     * @var string
     */
    protected $theme;

    /**
     * @return $this
     */
    public function setTheme(string $theme)
    {
        $this->theme = $theme;

        return $this;
    }
}
