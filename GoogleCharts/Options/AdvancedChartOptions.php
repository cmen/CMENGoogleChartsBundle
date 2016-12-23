<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedChartOptions extends MediumChartOptions
{
    /**
     * Where to place the axis titles, compared to the chart area. Supported values :
     * in - Draw the axis titles inside the the chart area.
     * out - Draw the axis titles outside the chart area.
     * none - Omit the axis titles.
     *
     * @var string
     */
    protected $axisTitlesPosition;

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
     * @var Series[]
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
     * @param string $axisTitlesPosition
     *
     * @return $this
     */
    public function setAxisTitlesPosition($axisTitlesPosition)
    {
        $this->axisTitlesPosition = $axisTitlesPosition;

        return $this;
    }

    /**
     * @param Series[] $series
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->series = $series;

        return $this;
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
