<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedChartOptions extends MediumChartOptions
{
    /**
     * An array of objects, each describing the format of the corresponding series in the chart. To use default
     * values for a series, specify an empty object {}. If a series or a value is not specified, the global value
     * will be used.
     * Each object supports the following properties :
     * color - The color to use for this series. Specify a valid HTML color string.
     * labelInLegend - The description of the series to appear in the chart legend.
     * targetAxisIndex - Which axis to assign this series to, where 0 is the default axis, and 1 is the opposite axis.
     *   Default value is 0; set to 1 to define a chart where different series are rendered against different axes.
     *   At least one series much be allocated to the default axis. You can define a different scale for different axes.
     * visibleInLegend - A boolean value, where true means that the series should have a legend entry, and false means
     * that it should not. Default is true.
     *
     * You can specify either an array of objects, each of which applies to the series in the order given, or you can
     * specify an object where each child has a numeric key indicating which series it applies to. For example, the
     * following two declarations are identical, and declare the first series as black and absent from the legend,
     * and the fourth as red and absent from the legend :
     * [['color' => 'black', 'visibleInLegend' => false], [], [], ['color' => 'red', 'visibleInLegend' => false]]
     * [0 => ['color' => 'black', 'visibleInLegend' => false], 3 => ['color' => 'red', 'visibleInLegend' => false]
     *
     * @var array
     */
    protected $series;

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
     * @param array $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @param string $titlePosition
     */
    public function setTitlePosition($titlePosition)
    {
        $this->titlePosition = $titlePosition;
    }
}
