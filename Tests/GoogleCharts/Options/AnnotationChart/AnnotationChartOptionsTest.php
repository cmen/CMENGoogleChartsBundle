<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Options\AnnotationChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class AnnotationChartOptionsTest extends TestCase
{
    public function testNumberOptions()
    {
        $annotationChartOptions = new AnnotationChartOptions();

        $this->assertCount(25, (array) $annotationChartOptions);
    }
}
