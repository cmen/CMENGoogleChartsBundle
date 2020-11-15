<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;
use CMEN\GoogleChartsBundle\Output\ChartOutputInterface;
use CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DataOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\EventsOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\OptionsOutput;
use PHPUnit\Framework\TestCase;

/**
 * @author Christophe Meneses
 */
class ColumnChartTest extends TestCase
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
        $chart = new ColumnChart();
        $chart->setElementID('div-chart')
            ->getData()->setArrayToDataTable([
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

        $chart->getOptions()->getAnimation()
            ->setDuration(1000)
            ->setEasing('in')
            ->setStartup(true);

        $chart->getOptions()->getAnnotations()
            ->setAlwaysOutside(true)
            ->getBoxStyle()
                ->setStroke('#888')
                ->setStrokeWidth(1)
                ->setRx(10)
                ->setRy(10)
                ->getGradient()
                    ->setColor1('#fbf6a7')
                    ->setColor2('#33b679')
                    ->setX1('0%')
                    ->setX2('100%')
                    ->setY1('0%')
                    ->setY2('100%')
                    ->setUseObjectBoundingBoxUnits(true);
        $chart->getOptions()->getAnnotations()
            ->getDatum()
                ->setStyle('point')
                ->getStem()
                    ->setColor('black')
                    ->setLength(12);
        $chart->getOptions()->getAnnotations()
            ->getDomain()
                ->setStyle('point')
                ->getStem()
                    ->setColor('black')
                    ->setLength(5);
        $chart->getOptions()->getAnnotations()
            ->setHighContrast(true);
        $chart->getOptions()->getAnnotations()
            ->getStem()
                ->setColor('black')
                ->setLength(5);
        $chart->getOptions()->getAnnotations()
            ->setStyle('point');
        $chart->getOptions()->getAnnotations()
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('#871b47')
                ->setAuraColor('#d799ae')
                ->setOpacity(0.8);

        $chart->getOptions()->setAxisTitlesPosition('out');

        //$chart->getOptions()->setBackgroundColor('red');
        $chart->getOptions()->getBackgroundColor()
            ->setStroke('#666')
            ->setStrokeWidth(0)
            ->setFill('white');

        $chart->getOptions()->getBar()->setGroupWidth('61.8%');

        $chart->getOptions()->getChartArea()
            //->setBackgroundColor('black')
            ->getBackgroundColor()
                ->setStroke('black')
                ->setStrokeWidth(1);
        $chart->getOptions()->getChartArea()
            ->setLeft('auto')
            ->setTop('auto')
            ->setWidth('auto')
            ->setHeight('auto');

        $chart->getOptions()->setColors(['red', '#004411']);

        $chart->getOptions()->setDataOpacity(1.0);

        $chart->getOptions()->setEnableInteractivity(true);

        $chart->getOptions()->getExplorer()
            ->setActions(['dragToPan', 'rightClickToReset'])
            ->setAxis('vertical')
            ->setKeepInBounds(false)
            ->setMaxZoomIn(0.25)
            ->setMaxZoomOut(4)
            ->setZoomDelta(1.5);

        $chart->getOptions()->setFocusTarget('datum');

        $chart->getOptions()->setFontSize(12);

        $chart->getOptions()->setFontName('Arial');

        $chart->getOptions()->setForceIFrame(false);

        $chart->getOptions()->getHAxis()
            ->setBaseline(5)
            ->setBaselineColor('black')
            ->setDirection(1)
            ->setFormat('decimal')
            ->getGridlines()
                ->setColor('#CCC')
                ->setCount(5);
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $chart->getOptions()->getHAxis()->getMinorGridlines()
            ->setColor('black')
            ->setCount(0);
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $chart->getOptions()->getHAxis()
            ->setLogScale(false)
            ->setScaleType('log')
            ->setTextPosition('out')
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(12)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('black');
        $chart->getOptions()->getHAxis()
            ->setTicks([5, 10, 15, 20])
            ->setTitle('title')
            ->getTitleTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true);
        $chart->getOptions()->getHAxis()
            ->setAllowContainerBoundaryTextCufoff(false)
            ->setSlantedText(false)
            ->setSlantedTextAngle(30)
            ->setMaxAlternation(2)
            ->setMaxTextLines(5)
            ->setMinTextSpacing(5)
            ->setShowTextEvery(1)
            ->setMaxValue(100)
            ->setMinValue(1)
            ->setViewWindowMode('pretty');
        $chart->getOptions()->getHAxis()
            ->getViewWindow()
                ->setMax(100)
                ->setMin(1);

        $chart->getOptions()->setHeight(500);

        $chart->getOptions()->setIsStacked(false);

        $chart->getOptions()->getLegend()
            ->setPosition('right')
            ->setAlignment('start')
            ->getTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(10)
                ->setBold(false)
                ->setItalic(false);

        $chart->getOptions()->setOrientation('horizontal');

        $chart->getOptions()->setReverseCategories(false);

        $chart->getOptions()->setSeries([
            ['color' => 'black', 'visibleInLegend' => false], [], [],
            ['color' => 'red', 'visibleInLegend' => false],
        ]);

        $chart->getOptions()->setTheme('maximized');

        $chart->getOptions()->setTitle('Title');

        $chart->getOptions()->setTitlePosition('out');

        $chart->getOptions()->getTitleTextStyle()
            ->setColor('black')
            ->setFontName('Arial')
            ->setFontSize(18)
            ->setBold(false)
            ->setItalic(false);

        $chart->getOptions()->getTooltip()
            ->setIgnoreBounds(false)
            ->setIsHtml(false)
            ->setShowColorCode(false)
            ->setTrigger('focus')
            ->getTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(10)
                ->setBold(false)
                ->setItalic(false);

        $chart->getOptions()->setTrendlines([new Trendlines(), new Trendlines()]);

        $vAxis1 = new VAxis();
        $vAxis1->setTitle('v1');
        $vAxis2 = new VAxis();
        $vAxis2->setTitle('v2');
        $chart->getOptions()->setVAxes([$vAxis1, $vAxis2]);

        $chart->getOptions()->getVAxis()
            ->setBaseline(5)
            ->setBaselineColor('black')
            ->setDirection(1)
            ->setFormat('decimal')
            ->getGridlines()
                ->setColor('#CCC')
                ->setCount(5);
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $chart->getOptions()->getVAxis()->getMinorGridlines()
            ->setColor('black')
            ->setCount(0);
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $chart->getOptions()->getVAxis()
            ->setLogScale(false)
            ->setScaleType('log')
            ->setTextPosition('out')
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(12)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('black');
        $chart->getOptions()->getVAxis()
            ->setTicks([5, 10, 15, 20])
            ->setTitle('title')
            ->getTitleTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true);
        $chart->getOptions()->getVAxis()
            ->setMaxValue(100)
            ->setMinValue(1)
            ->setViewWindowMode('pretty');
        $chart->getOptions()->getVAxis()
            ->getViewWindow()
                ->setMax(100)
                ->setMin(1);

        $chart->getOptions()->setWidth(700);

        /** @noinspection PhpUnhandledExceptionInspection */
        $js = $this->chartOutput->fullCharts($chart);

        $this->assertContains('{"animation":{"startup":true,"duration":1000,"easing":"in"}, "annotations":{"alwaysOutside":true,"boxStyle":{"rx":10,"ry":10,"gradient":{"color1":"#fbf6a7","color2":"#33b679","x1":"0%","y1":"0%","x2":"100%","y2":"100%","useObjectBoundingBoxUnits":true},"stroke":"#888","strokeWidth":1},"datum":{"stem":{"length":12,"color":"black"},"style":"point"},"domain":{"stem":{"length":5,"color":"black"},"style":"point"},"highContrast":true,"stem":{"length":5,"color":"black"},"style":"point","textStyle":{"auraColor":"#d799ae","color":"#871b47","fontName":"Times-Roman","fontSize":18,"bold":true,"italic":true,"opacity":0.8}}, "bar":{"groupWidth":"61.8%"}, "explorer":{"actions":["dragToPan","rightClickToReset"],"axis":"vertical","keepInBounds":false,"maxZoomIn":0.25,"maxZoomOut":4,"zoomDelta":1.5}, "hAxis":{"allowContainerBoundaryTextCufoff":false,"slantedText":false,"slantedTextAngle":30,"maxAlternation":2,"maxTextLines":5,"minTextSpacing":5,"showTextEvery":1,"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","logScale":false,"scaleType":"log","maxValue":100,"minValue":1,"ticks":[5,10,15,20],"gridlines":{"count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"#CCC"},"minorGridlines":{"count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"black"},"textPosition":"out","textStyle":{"color":"black","fontName":"Times-Roman","fontSize":12,"bold":true,"italic":true},"titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"viewWindow":{"max":100,"min":1},"viewWindowMode":"pretty","title":"title"}, "legend":{"alignment":"start","position":"right","textStyle":{"color":"black","fontName":"Arial","fontSize":10,"bold":false,"italic":false}}, "tooltip":{"ignoreBounds":false,"showColorCode":false,"textStyle":{"color":"black","fontName":"Arial","fontSize":10,"bold":false,"italic":false},"isHtml":false,"trigger":"focus"}, "vAxis":{"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","gridlines":{"count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"#CCC"},"minorGridlines":{"count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"black"},"logScale":false,"scaleType":"log","textPosition":"out","textStyle":{"color":"black","fontName":"Times-Roman","fontSize":12,"bold":true,"italic":true},"ticks":[5,10,15,20],"titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"maxValue":100,"minValue":1,"viewWindowMode":"pretty","viewWindow":{"max":100,"min":1},"title":"title"}, "backgroundColor":{"stroke":"#666","strokeWidth":0,"fill":"white"}, "chartArea":{"backgroundColor":{"stroke":"black","strokeWidth":1},"height":"auto","left":"auto","top":"auto","width":"auto"}, "titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":false,"italic":false}, "forceIFrame":false, "height":500, "width":700, "enableInteractivity":true, "colors":["red","#004411"], "fontName":"Arial", "fontSize":12, "title":"Title", "axisTitlesPosition":"out", "series":{"0":{"color":"black","visibleInLegend":false},"3":{"color":"red","visibleInLegend":false}}, "theme":"maximized", "titlePosition":"out", "dataOpacity":1, "focusTarget":"datum", "isStacked":false, "orientation":"horizontal", "reverseCategories":false, "vAxes":{"0":{"title":"v1"},"1":{"title":"v2"}}};', $js);
    }
}
