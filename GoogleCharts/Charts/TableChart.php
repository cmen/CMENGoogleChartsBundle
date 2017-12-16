<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TableChart\TableChartOptions;

/**
 * @author Christophe Meneses
 */
class TableChart extends Chart
{
    /**
     * @var TableChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new TableChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'Table';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'table';
    }

    /**
     * @return TableChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options TableChartOptions
     *
     * @return TableChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
