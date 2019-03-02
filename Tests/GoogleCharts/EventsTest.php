<?php

namespace Tests\CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ComboChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Map;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\TreeMapChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Events;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;

/**
 * @author Christophe Meneses
 */
class EventsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     * @expectedExceptionMessage  badEventType event is not available for this type of chart.
     */
    public function testAddListenerWithBadEventType()
    {
        $map = new Map();

        $events = new Events($map);
        $events->addListener('badEventType', 'functionName');
    }

    /**
     * @expectedException \CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     * @expectedExceptionMessage  regionClick event is not available for this type of chart.
     */
    public function testAddListenerWithEventTypeNotAvailableForTypeOfChart()
    {
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
