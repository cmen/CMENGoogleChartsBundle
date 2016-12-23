<?php

namespace CMEN\GoogleChartsBundle\Tests;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;

class ChartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     * @expectedExceptionMessage Container is not defined.
     */
    public function testNullContainer()
    {
        $chart = new ColumnChart();
        $chart->getOptions()->setTitle('title')->setTitlePosition('in');
        $chart->getData()->setArrayToDataTable([
            ['Time of Day', 'Motivation Level', ['role' => 'annotation'], 'Energy Level', ['role' => 'annotation']],
            [['v' => [8, 0, 0], 'f' => '8 am'],  1, '1', 0.25, '0.2'],
            [['v' => [9, 0, 0], 'f' => '9 am'],  2, '2',  0.5, '0.5'],
            [['v' => [10, 0, 0], 'f' => '10 am'], 3, '3',    1,  '1'],
            [['v' => [11, 0, 0], 'f' => '11 am'], 4, '4', 2.25,  '2'],
            [['v' => [12, 0, 0], 'f' => '12 am'], 5, '5', 2.25,  '2'],
            [['v' => [13, 0, 0], 'f' => '1 pm'],  6, '6',    3,  '3'],
            [['v' => [14, 0, 0], 'f' => '2 pm'],  7, '7', 3.25,  '3'],
            [['v' => [15, 0, 0], 'f' => '3 pm'],  8, '8',    5,  '5'],
            [['v' => [16, 0, 0], 'f' => '4 pm'],  9, '9',  6.5,  '6'],
            [['v' => [17, 0, 0], 'f' => '5 pm'], 10, '10',  10, '10']
        ]);

        $chart->startDraw();
    }
}
