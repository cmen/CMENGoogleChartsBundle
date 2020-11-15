<?php

namespace CMEN\GoogleChartsBundle\Tests\Output\Javascript;

use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class DateOutputTest extends TestCase
{
    public function testDraw()
    {
        $date = new \DateTime('2017-05-07 17:03:55');

        $dateOutput = new DateOutput();
        $js = $dateOutput->draw($date);

        $this->assertEquals('new Date(2017, 4, 7, 17, 03, 55)', $js);
    }
}
