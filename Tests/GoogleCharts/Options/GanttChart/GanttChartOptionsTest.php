<?php

namespace Tests\CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart\GanttChartOptions;

/**
 * @author Christophe Meneses
 */
class GanttChartOptionsTest extends \PHPUnit_Framework_TestCase
{
    public function testNumberOptions()
    {
        $ganttChartOptions = new GanttChartOptions();

        $this->assertCount(4, (array) $ganttChartOptions);
    }
}
