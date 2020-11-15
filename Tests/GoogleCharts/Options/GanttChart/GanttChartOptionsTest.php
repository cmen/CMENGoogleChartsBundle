<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart\GanttChartOptions;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class GanttChartOptionsTest extends TestCase
{
    public function testNumberOptions()
    {
        $ganttChartOptions = new GanttChartOptions();

        $this->assertCount(4, (array) $ganttChartOptions);
    }
}
