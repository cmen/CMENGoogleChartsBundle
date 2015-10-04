<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;

/**
 * @author Christophe Meneses
 */
class AnnotationChart extends Chart
{
    /**
     * @var AnnotationChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new AnnotationChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'AnnotationChart';
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
        return 'annotationchart';
    }

    /**
     * @return AnnotationChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
