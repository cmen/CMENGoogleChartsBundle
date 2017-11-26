<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedChartOptions extends MediumChartOptions
{
    use AxisTitlesPositionTrait;

    use SeriesTrait;

    /**
     * A theme is a set of predefined option values that work together to achieve a specific chart behavior or visual
     * effect. Currently only one theme is available :
     * 'maximized' - Maximizes the area of the chart, and draws the legend and all of the labels inside the chart area.
     *   Sets the following options:
     *   chartArea: {width: '100%', height: '100%'},
     *   legend: {position: 'in'},
     *   titlePosition: 'in', axisTitlesPosition: 'in',
     *   hAxis: {textPosition: 'in'}, vAxis: {textPosition: 'in'}
     *
     * @var string
     */
    protected $theme;

    /**
     * Where to place the chart title, compared to the chart area. Supported values:
     * in - Draw the title inside the chart area.
     * out - Draw the title outside the chart area.
     * none - Omit the title.
     *
     * @var string
     */
    protected $titlePosition;

    /**
     * @var VAxis
     */
    protected $vAxis;


    /**
     * AdvancedChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->vAxis = new VAxis();
    }

    /**
     * @return VAxis
     */
    public function getVAxis()
    {
        return $this->vAxis;
    }

    /**
     * @param string $theme
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @param string $titlePosition
     *
     * @return $this
     */
    public function setTitlePosition($titlePosition)
    {
        $this->titlePosition = $titlePosition;

        return $this;
    }
}
