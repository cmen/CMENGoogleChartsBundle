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

    public function __construct()
    {
        parent::__construct();

        $this->calendar = new Calendar();
        $this->colorAxis = new ColorAxis();
        $this->noDataPattern = new NoDataPattern();
    }

    public function getCalendar(): Calendar
    {
        return $this->calendar;
    }

    public function getColorAxis(): ColorAxis
    {
        return $this->colorAxis;
    }

    public function getNoDataPattern(): NoDataPattern
    {
        return $this->noDataPattern;
    }
}
