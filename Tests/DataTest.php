<?php

namespace CMEN\GoogleChartsBundle\Tests;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;

class DataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     * @expectedExceptionMessage There is no data for chart. Use method setArrayToDataTable() to provide data.
     */
    public function testEmptyData()
    {
        $chart = new ColumnChart();
        $chart->setElementID('div-chart')
            ->getOptions()->setTitle('title')->setTitlePosition('in');

        $chart->startDraw();
    }
}
