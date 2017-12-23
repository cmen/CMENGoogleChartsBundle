<?php

namespace Tests\CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\GoogleCharts\Data;
use CMEN\GoogleChartsBundle\Output\Javascript\DataOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;

/**
 * @author Christophe Meneses
 */
class DataOutputTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     * @expectedExceptionMessage There is no data for chart. Use method setArrayToDataTable() to provide data.
     *
     * @throws \CMEN\GoogleChartsBundle\Exception\GoogleChartsException
     */
    public function testEmptyData()
    {
        $data = new Data();

        $dataOutput = new DataOutput(new DateOutput());
        $dataOutput->draw($data, 'dataName');
    }
}
