<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CalendarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;

/**
 * @author Christophe Meneses
 */
class CalendarChartOptions extends ChartOptions
{
    use TitleTrait;

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

    /**
     * CalendarChartOptions constructor.
     */
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
}
