<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\CalendarChart\CalendarChartOptions;

/**
 * @author Christophe Meneses
 */
class CalendarChart extends Chart
{
    /**
     * @var CalendarChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new CalendarChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Calendar';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'calendar';
    }

    /**
     * @return CalendarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}