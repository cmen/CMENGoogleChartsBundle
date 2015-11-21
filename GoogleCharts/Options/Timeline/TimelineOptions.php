<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BasicChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BasicTooltip;

/**
 * @author Christophe Meneses
 */
class TimelineOptions extends BasicChartOptions
{
    /**
     * Whether display elements (e.g., the bars in a timeline) should obscure grid lines. If false, grid lines may be
     * covered completely by display elements. If true, display elements may be altered to keep grid lines visible.
     *
     * @var bool
     */
    protected $avoidOverlappingGridLines;

    /**
     * The background color for the main area of the chart. Can be either a simple HTML color string, for example :
     * 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $backgroundColor;

    /**
     * The colors to use for the chart elements. An array of strings, where each element is an HTML color string,
     * for example: colors:['red','#004411'].
     *
     * @var string[]
     */
    protected $colors;

    /**
     * @var Timeline
     */
    protected $timeline;

    /**
     * @var BasicTooltip
     */
    protected $tooltip;


    public function __construct()
    {
        parent::__construct();

        $this->timeline = new Timeline();
        $this->tooltip =  new BasicTooltip();
    }


    /**
     * @return Timeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }

    /**
     * @return BasicTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param boolean $avoidOverlappingGridLines
     *
     * @return TimelineOptions
     */
    public function setAvoidOverlappingGridLines($avoidOverlappingGridLines)
    {
        $this->avoidOverlappingGridLines = $avoidOverlappingGridLines;

        return $this;
    }

    /**
     * @param string $backgroundColor
     *
     * @return TimelineOptions
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @param string[] $colors
     *
     * @return TimelineOptions
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }
}
