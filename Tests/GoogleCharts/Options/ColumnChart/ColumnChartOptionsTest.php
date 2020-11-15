<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\ColumnChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart\ColumnChartOptions;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class ColumnChartOptionsTest extends TestCase
{
    public function testNumberOptions()
    {
        $columnChartOptions = new ColumnChartOptions();

        $this->assertCount(30, (array) $columnChartOptions);
    }
}
