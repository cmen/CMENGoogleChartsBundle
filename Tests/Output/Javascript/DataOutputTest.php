<?php

namespace CMEN\GoogleChartsBundle\Tests\Output\Javascript;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Data;
use CMEN\GoogleChartsBundle\Output\Javascript\DataOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class DataOutputTest extends TestCase
{
    /**
     * @throws GoogleChartsException
     */
    public function testEmptyData()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('There is no data for chart. Use method setArrayToDataTable() to provide data.');

        $data = new Data();

        $dataOutput = new DataOutput(new DateOutput());
        $dataOutput->draw($data, 'dataName');
    }
}
