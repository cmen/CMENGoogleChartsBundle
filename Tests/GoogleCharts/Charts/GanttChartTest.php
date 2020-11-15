<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\GanttChart;
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
class GanttChartTest extends TestCase
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
        $chart = new GanttChart();
        $chart->setElementID('div-chart')->getData()->setArrayToDataTable([
            [
                ['label' => 'Task ID', 'type' => 'string'],
                ['label' => 'Task Name', 'type' => 'string'],
                ['label' => 'Resource', 'type' => 'string'],
                ['label' => 'Start Date', 'type' => 'date'],
                ['label' => 'End Date', 'type' => 'date'],
                ['label' => 'Duration', 'type' => 'number'],
                ['label' => 'Percent Complete', 'type' => 'number'],
                ['label' => 'Dependencies', 'type' => 'string'],
            ],
            ['2014Spring', 'Spring 2014', 'spring', new DateTime('2014-02-22'), new DateTime('2014-05-20'), null, 100, null],
            ['2014Summer', 'Summer 2014', 'summer', new DateTime('2014-05-21'), new DateTime('2014-08-20'), null, 100, null],
            ['2014Autumn', 'Autumn 2014', 'autumn', new DateTime('2014-08-21'), new DateTime('2014-11-20'), null, 100, null],
            ['2014Winter', 'Winter 2014', 'winter', new DateTime('2014-11-21'), new DateTime('2015-02-21'), null, 100, null],
            ['2015Spring', 'Spring 2015', 'spring', new DateTime('2015-2-22'), new DateTime('2015-5-20'), null, 50, null],
            ['2015Summer', 'Summer 2015', 'summer', new DateTime('2015-5-21'), new DateTime('2015-8-20'), null, 0, null],
            ['2015Autumn', 'Autumn 2015', 'autumn', new DateTime('2015-8-21'), new DateTime('2015-11-20'), null, 0, null],
            ['2015Winter', 'Winter 2015', 'winter', new DateTime('2015-11-21'), new DateTime('2016-2-21'), null, 0, null],
            ['Football', 'Football Season', 'sports', new DateTime('2014-8-4'), new DateTime('2015-1-1'), null, 100, null],
            ['Baseball', 'Baseball Season', 'sports', new DateTime('2015-2-31'), new DateTime('2015-9-20'), null, 14, null],
            ['Basketball', 'Basketball Season', 'sports', new DateTime('2014-9-28'), new DateTime('2015-5-20'), null, 86, null],
            ['Hockey', 'Hockey Season', 'sports', new DateTime('2014-9-8'), new DateTime('2015-5-21'), null, 89, null],
        ]);
        $chart->getOptions()->getBackgroundColor()->setFill('white');

        $chart->getOptions()->getGantt()
            ->getArrow()
                ->setAngle(45)
                ->setColor('#000')
                ->setLength(8)
                ->setRadius(15)
                ->setSpaceAfter(4)
                ->setWidth(1.4);

        $chart->getOptions()->getGantt()
            ->setBarCornerRadius(2)
            ->setBarHeight(15)
            ->setCriticalPathEnabled(true)
            ->getCriticalPathStyle()
                ->setStroke('red')
                ->setStrokeWidth(1.4);

        $chart->getOptions()->getGantt()
            ->setDefaultStartDate(1494312323000)
            ->getInnerGridHorizLine()
                ->setStroke('green')
                ->setStrokeWidth(1);

        $chart->getOptions()->getGantt()
            ->getInnerGridTrack()
                ->setFill('blue');

        $chart->getOptions()->getGantt()
            ->getInnerGridDarkTrack()
                ->setFill('black');

        $chart->getOptions()->getGantt()
            ->setLabelMaxWidth(300)
            ->getLabelStyle()
                ->setFontName('Roboto2')
                ->setFontSize(14)
                ->setColor('#757575');

        $chart->getOptions()->getGantt()
            ->setPercentEnabled(true)
            ->getPercentStyle()
                ->setFill('yellow');

        $chart->getOptions()->getGantt()
            ->setShadowEnabled(true)
            ->setShadowColor('#000')
            ->setShadowOffset(1)
            ->setTrackHeight(15);

        $chart->getOptions()
            ->setHeight(400)
            ->setWidth(900);

        /** @noinspection PhpUnhandledExceptionInspection */
        $js = $this->chartOutput->fullCharts($chart);

        $this->assertContains('{"backgroundColor":{"fill":"white"}, "gantt":{"arrow":{"angle":45,"length":8,"radius":15,"spaceAfter":4,"width":1.4,"color":"#000"},"barCornerRadius":2,"barHeight":15,"criticalPathEnabled":true,"criticalPathStyle":{"stroke":"red","strokeWidth":1.4},"defaultStartDate":1494312323000,"innerGridHorizLine":{"stroke":"green","strokeWidth":1},"innerGridTrack":{"fill":"blue"},"innerGridDarkTrack":{"fill":"black"},"labelMaxWidth":300,"labelStyle":{"fontName":"Roboto2","fontSize":14,"color":"#757575"},"percentEnabled":true,"percentStyle":{"fill":"yellow"},"shadowEnabled":true,"shadowColor":"#000","shadowOffset":1,"trackHeight":15}, "height":400, "width":900};', $js);
    }
}
