<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\LineChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class LineChartOptionsTest extends TestCase
{
    public function testNumberOptions()
    {
        $lineChartOptions = new LineChartOptions();

        $this->assertCount(38, (array) $lineChartOptions);
    }
}
