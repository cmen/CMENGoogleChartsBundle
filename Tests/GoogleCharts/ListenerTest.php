<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Listener;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class ListenerTest extends TestCase
{
    public function testBadType()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('badType is not a valid type of event.');

        new Listener('badType', 'functionName');
    }

    public function testGoodType()
    {
        $listener = new Listener(EventType::READY, 'functionName');

        $this->assertEquals(EventType::READY, $listener->getType());
        $this->assertEquals('functionName', $listener->getFunction());
    }
}
