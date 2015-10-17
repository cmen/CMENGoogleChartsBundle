<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline\TimelineOptions;

class Timeline extends Chart
{
    /**
     * @var TimelineOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new TimelineOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Timeline';
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
        return 'timeline';
    }

    /**
     * @return TimelineOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
