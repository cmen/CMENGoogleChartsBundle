<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ComboChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Map;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\TreeMapChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Events;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class EventsTest extends TestCase
{
    public function testAddListenerWithBadEventType()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('badEventType event is not available for this type of chart.');

        $map = new Map();

        $events = new Events($map);
        $events->addListener('badEventType', 'functionName');
    }

    public function testAddListenerWithEventTypeNotAvailableForTypeOfChart()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('regionClick event is not available for this type of chart.');

        $comboChart = new ComboChart();

        $events = new Events($comboChart);
        $events->addListener(EventType::REGION_CLICK, 'functionName');
    }

    public function testAddListenerWithEventTypeAvailableForTypeOfChart()
    {
        $treeMap = new TreeMapChart();

        $events = new Events($treeMap);
        $events->addListener(EventType::ROLLUP, 'functionName');

        $this->assertTrue(true);
    }
}
