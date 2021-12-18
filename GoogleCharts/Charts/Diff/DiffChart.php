<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

interface DiffChart
{
    public function getOldChart(): Chart;

    public function getNewChart(): Chart;
}
