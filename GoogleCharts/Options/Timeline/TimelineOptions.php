<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\BasicChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BasicTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;

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

    use ColorsTrait;

    /**
     * @var Timeline
     */
    protected $timeline;

    /**
     * @var BasicTooltip
     */
    protected $tooltip;

    /**
     * TimelineOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->timeline = new Timeline();
        $this->tooltip = new BasicTooltip();
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
     * @param bool $avoidOverlappingGridLines
     *
     * @return $this
     */
    public function setAvoidOverlappingGridLines($avoidOverlappingGridLines)
    {
        $this->avoidOverlappingGridLines = $avoidOverlappingGridLines;

        return $this;
    }

    /**
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
