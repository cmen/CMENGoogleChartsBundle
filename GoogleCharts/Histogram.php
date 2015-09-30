<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\Histogram\HistogramOptions;

/**
 * @author Christophe Meneses
 */
class Histogram extends Chart
{
    /**
     * @var HistogramOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new HistogramOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Histogram';
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
        return 'corechart';
    }

    /**
     * @return HistogramOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
