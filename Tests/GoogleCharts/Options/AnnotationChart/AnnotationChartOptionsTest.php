<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\AnnotationChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;

/**
 * @author Christophe Meneses
 */
class AnnotationChartOptionsTest extends \PHPUnit_Framework_TestCase
{
    public function testNumberOptions()
    {
        $annotationChartOptions = new AnnotationChartOptions();

        $this->assertCount(25, (array) $annotationChartOptions);
    }
}
