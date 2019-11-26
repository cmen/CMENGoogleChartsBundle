<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\ColumnChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;

/**
 * @author Christophe Meneses
 */
class ColumnChartOptionsTest extends \PHPUnit_Framework_TestCase
{
    public function testNumberOptions()
    {
        $columnChartOptions = new ColumnChartOptions();

        $this->assertCount(30, (array) $columnChartOptions);
    }
}
