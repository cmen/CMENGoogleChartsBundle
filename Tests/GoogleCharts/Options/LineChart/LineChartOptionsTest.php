<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\LineChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions;

/**
 * @author Christophe Meneses
 */
class LineChartOptionsTest extends \PHPUnit_Framework_TestCase
{
    public function testNumberOptions()
    {
        $lineChartOptions = new LineChartOptions();

        $this->assertCount(38, (array) $lineChartOptions);
    }
}
