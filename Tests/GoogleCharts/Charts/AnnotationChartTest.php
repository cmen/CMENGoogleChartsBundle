<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\AnnotationChart;
use CMEN\GoogleChartsBundle\Output\ChartOutputInterface;
use CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DataOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\EventsOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\OptionsOutput;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class AnnotationChartTest extends TestCase
{
    /** @var ChartOutputInterface */
    private $chartOutput;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $dateOutput = new DateOutput();
        $optionsOutput = new OptionsOutput($dateOutput);
        $dataOutput = new DataOutput($dateOutput);
        $eventsOutput = new EventsOutput();

        $this->chartOutput = new ChartOutput('current', 'en', $optionsOutput, $dataOutput, $eventsOutput);
    }

    public function testJavascriptOutput()
    {
        $chart = new AnnotationChart();
        $chart->setElementID('div-chart')
            ->getData()->setArrayToDataTable([
                [
                    ['label' => 'Date', 'type' => 'date'],
                    ['label' => 'Kepler-22b mission', 'type' => 'number'],
                    ['label' => 'Kepler title', 'type' => 'string'],
                    ['label' => 'Kepler text', 'type' => 'string'],
                    ['label' => 'Gliese 163 mission', 'type' => 'number'],
                    ['label' => 'Gliese title', 'type' => 'string'],
                    ['label' => 'Gliese text', 'type' => 'string'],
                ],
                [new DateTime('2314-02-15'), 12400, 'undefined', 'undefined', 10645, 'undefined', 'undefined'],
                [new DateTime('2314-02-16'), 24045, 'Lalibertines', 'First encounter', 12374, 'undefined', 'undefined'],
                [new DateTime('2314-02-17'), 35022, 'Lalibertines', 'They are very tall', 15766, 'Gallantors', 'First Encounter'],
                [new DateTime('2314-02-18'), 12284, 'Lalibertines', 'Attack on our crew!', 34334, 'Gallantors', 'Statement of shared principles'],
                [new DateTime('2314-02-19'), 8476, 'Lalibertines', 'Heavy casualties', 66467, 'Gallantors', 'Mysteries revealed'],
                [new DateTime('2314-02-20'), 0, 'Lalibertines', 'All crew lost', 79463, 'Gallantors', 'Omniscience achieved'],
            ]);

        $chart->getOptions()
            ->setAllowHtml(false)
            ->setAllValuesSuffix('')
            ->setAnnotationsWidth(25)
            ->setColors(['#FF0000', '#0000FF'])
            ->setDateFormat('HH:mm MMMM dd, yyyy')
            ->setDisplayAnnotations(true)
            ->setDisplayAnnotationsFilter(false)
            ->setDisplayDateBarSeparator(true)
            ->setDisplayExactValues(false)
            ->setDisplayLegendDots(true)
            ->setDisplayLegendValues(true)
            ->setDisplayRangeSelector(true)
            ->setDisplayZoomButtons(true)
            ->setFill(0)
            ->setLegendPosition('sameRow')
            ->setMax(1000)
            ->setMin(0)
            ->setNumberFormats('')
            ->setScaleColumns([1000])
            ->setScaleFormat('#')
            ->setScaleType('fixed')
            ->getTable()
                ->setSortAscending(true)
                ->setSortColumn(1);
        $chart->getOptions()
            ->setThickness(0)
            ->setZoomStartTime(new DateTime('2314-02-15'))
            ->setZoomEndTime(new DateTime('2314-02-17'));

        /** @noinspection PhpUnhandledExceptionInspection */
        $js = $this->chartOutput->fullCharts($chart);

        $this->assertContains('{"allValuesSuffix":"", "annotationsWidth":25, "dateFormat":"HH:mm MMMM dd, yyyy", "displayAnnotations":true, "displayAnnotationsFilter":false, "displayDateBarSeparator":true, "displayExactValues":false, "displayLegendDots":true, "displayLegendValues":true, "displayRangeSelector":true, "displayZoomButtons":true, "fill":0, "legendPosition":"sameRow", "numberFormats":"", "scaleColumns":[1000], "scaleFormat":"#", "scaleType":"fixed", "table":{"sortAscending":true,"sortColumn":1}, "thickness":0, "zoomEndTime":new Date(2314, 1, 17, 00, 00, 00), "zoomStartTime":new Date(2314, 1, 15, 00, 00, 00), "allowHtml":false, "colors":["#FF0000","#0000FF"], "max":1000, "min":0};', $js);
    }
}
