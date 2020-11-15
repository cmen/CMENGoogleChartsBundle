<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

interface DiffChart
{
    /**
     * @return Chart
     */
    public function getOldChart()/* : Chart */;

    /**
     * @return Chart
     */
    public function getNewChart()/* : Chart */;
}
