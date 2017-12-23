<?php

namespace Tests\CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;

/**
 * @author Christophe Meneses
 */
class DateOutputTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $date = new \DateTime('2017-05-07 17:03:55');

        $dateOutput = new DateOutput();
        $js = $dateOutput->draw($date);

        $this->assertEquals('new Date(2017, 4, 7, 17, 03, 55)', $js);
    }
}
