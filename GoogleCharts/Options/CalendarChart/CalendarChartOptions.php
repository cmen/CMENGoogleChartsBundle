<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\CalendarChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMENGoogleChartsBundle\GoogleCharts\Options\ColorAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\TitleTextStyle;

/**
 * @author Christophe Meneses
 */
class CalendarChartOptions extends ChartOptions
{
    /**
     * Text to display above the chart.
     *
     * @var string
     */
    protected $title;

    /**
     * @var Calendar
     */
    protected $calendar;

    /**
     * @var ColorAxis
     */
    protected $colorAxis;

    /**
     * @var NoDataPattern
     */
    protected $noDataPattern;


    public function __construct()
    {
        parent::__construct();

        $this->calendar = new Calendar();
        $this->colorAxis = new ColorAxis();
        $this->noDataPattern = new NoDataPattern();
    }


    /**
     * @return Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * @return ColorAxis
     */
    public function getColorAxis()
    {
        return $this->colorAxis;
    }

    /**
     * @return NoDataPattern
     */
    public function getNoDataPattern()
    {
        return $this->noDataPattern;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
