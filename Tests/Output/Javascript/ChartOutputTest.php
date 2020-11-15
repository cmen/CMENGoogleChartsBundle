<?php

namespace CMEN\GoogleChartsBundle\Tests\Output\Javascript;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\Output\ChartOutputInterface;
use CMEN\GoogleChartsBundle\Output\DataOutputInterface;
use CMEN\GoogleChartsBundle\Output\EventsOutputInterface;
use CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput;
use CMEN\GoogleChartsBundle\Output\OptionsOutputInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class ChartOutputTest extends TestCase
{
    /** @var ChartOutputInterface */
    private $chartOutput;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $optionsOutput = $this->createMock(OptionsOutputInterface::class);
        $dataOutput = $this->createMock(DataOutputInterface::class);
        $eventsOutput = $this->createMock(EventsOutputInterface::class);

        $this->chartOutput = new ChartOutput('current', 'en', $optionsOutput, $dataOutput, $eventsOutput);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testContainerIsNotDefined()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('Container is not defined.');

        $chart = new ColumnChart();
        $chart->getOptions()->setTitle('title');
        $chart->getData()->setArrayToDataTable([
            ['Time of Day', 'Motivation Level', ['role' => 'annotation'], 'Energy Level', ['role' => 'annotation']],
            [['v' => [8, 0, 0], 'f' => '8 am'],  1, '1', 0.25, '0.2'],
            [['v' => [9, 0, 0], 'f' => '9 am'],  2, '2',  0.5, '0.5'],
            [['v' => [10, 0, 0], 'f' => '10 am'], 3, '3',    1,  '1'],
            [['v' => [11, 0, 0], 'f' => '11 am'], 4, '4', 2.25,  '2'],
            [['v' => [12, 0, 0], 'f' => '12 am'], 5, '5', 2.25,  '2'],
            [['v' => [13, 0, 0], 'f' => '1 pm'],  6, '6',    3,  '3'],
            [['v' => [14, 0, 0], 'f' => '2 pm'],  7, '7', 3.25,  '3'],
            [['v' => [15, 0, 0], 'f' => '3 pm'],  8, '8',    5,  '5'],
            [['v' => [16, 0, 0], 'f' => '4 pm'],  9, '9',  6.5,  '6'],
            [['v' => [17, 0, 0], 'f' => '5 pm'], 10, '10',  10, '10'],
        ]);

        $this->chartOutput->startChart($chart);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamChartsBadType()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('An instance of Chart or an array of Chart is expected.');

        /* @noinspection PhpParamsInspection */
        $this->chartOutput->startCharts('xxxx');
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamChartsBadTypeForMultipleCharts()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('An array of Chart is expected.');

        $charts = [new ColumnChart(), new ColumnChart(), 'xxx'];
        $elementsID = ['div1', 'div2', 'div3'];

        $this->chartOutput->startCharts($charts, $elementsID);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamElementsIDBadTypeForOneChart()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('A string is expected for HTML element ID.');

        $this->chartOutput->startCharts(new ColumnChart(), 66);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamElementsIDBadTypeForMultipleCharts()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('A string is expected for HTML element ID.');

        $charts = [new ColumnChart(), new ColumnChart(), new ColumnChart()];
        $elementsID = ['div1', 123, 'div3'];

        $this->chartOutput->startCharts($charts, $elementsID);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamElementsIDNotArrayForMultipleCharts()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('An array of string is expected for HTML elements IDs.');

        $charts = [new ColumnChart(), new ColumnChart(), new ColumnChart()];
        $elementsID = 'div1';

        $this->chartOutput->startCharts($charts, $elementsID);
    }

    /**
     * @throws GoogleChartsException
     */
    public function testParamElementsIDBadCountForMultipleCharts()
    {
        $this->expectException(GoogleChartsException::class);
        $this->expectExceptionMessage('Array charts and array HTML elements ID do not have the same number of element.');

        $charts = [new ColumnChart(), new ColumnChart(), new ColumnChart()];
        $elementsID = ['div1', 'div2'];

        $this->chartOutput->startCharts($charts, $elementsID);
    }

    public function testLoadLibraries()
    {
        $this->assertEquals(
            "google.charts.load('current', {packages:['corechart','map','gauge'], language: 'en'});",
            $this->chartOutput->loadLibraries(['corechart', 'map', 'gauge'])
        );
    }

    public function testStartCallback()
    {
        $this->assertEquals(
            'google.charts.setOnLoadCallback(myCallback); function myCallback() {',
            $this->chartOutput->startCallback('myCallback')
        );
    }

    public function testEndCallback()
    {
        $this->assertEquals('}', $this->chartOutput->endCallback());
    }
}
