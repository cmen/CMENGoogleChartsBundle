<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\Gauge\GaugeOptions;

/**
 * @author Christophe Meneses
 */
class Gauge extends Chart
{
    /**
     * @var GaugeOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new GaugeOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Gauge';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'gauge';
    }

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return $this->options;
    }
}
