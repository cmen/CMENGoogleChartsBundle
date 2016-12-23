<?php

namespace CMEN\GoogleChartsBundle\Tests\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * Class ColumnChartTest
 *
 * @author Christophe Meneses
 */
class ColumnChartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ColumnChart
     */
    private $chart;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        $this->chart = new ColumnChart();
        $this->chart->setElementID('div-chart')
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
                [['v' => [17, 0, 0], 'f' => '5 pm'], 10, '10',  10, '10']
            ]);

        $this->chart->getOptions()->getAnimation()
            ->setDuration(1000)
            ->setEasing('in')
            ->setStartup(true);

        $this->chart->getOptions()->getAnnotations()
            ->setAlwaysOutside(true)
            ->getBoxStyle()
                ->setStroke('#888')
                ->setStrokeWidth(1)
                ->setRx(10)
                ->setRy(10);
        $this->chart->getOptions()->getAnnotations()
            ->getDatum()
                ->setStyle('point')
                ->getStem()
                    ->setColor('black')
                    ->setLength(12);
        $this->chart->getOptions()->getAnnotations()
            ->getDomain()
                ->setStyle('point')
                ->getStem()
                    ->setColor('black')
                    ->setLength(5);
        $this->chart->getOptions()->getAnnotations()
            ->setHighContrast(true);
        $this->chart->getOptions()->getAnnotations()
            ->getStem()
                ->setColor('black')
                ->setLength(5);
        $this->chart->getOptions()->getAnnotations()
            ->setStyle('point');
        $this->chart->getOptions()->getAnnotations()
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('#871b47')
                ->setAuraColor('#d799ae')
                ->setOpacity(0.8);

        $this->chart->getOptions()->setAxisTitlesPosition('out');

        //$this->chart->getOptions()->setBackgroundColor('red');
        $this->chart->getOptions()->getBackgroundColor()
            ->setStroke('#666')
            ->setStrokeWidth(0)
            ->setFill('white');

        $this->chart->getOptions()->getBar()->setGroupWidth('61.8%');

        $this->chart->getOptions()->getChartArea()
            //->setBackgroundColor('black')
            ->getBackgroundColor()
                ->setStroke('black')
                ->setStrokeWidth(1);
        $this->chart->getOptions()->getChartArea()
            ->setLeft('auto')
            ->setTop('auto')
            ->setWidth('auto')
            ->setHeight('auto');

        $this->chart->getOptions()->setColors(['red','#004411']);

        $this->chart->getOptions()->setDataOpacity(1.0);

        $this->chart->getOptions()->setEnableInteractivity(true);

        $this->chart->getOptions()->getExplorer()
            ->setActions(['dragToPan', 'rightClickToReset'])
            ->setAxis('vertical')
            ->setKeepInBounds(false)
            ->setMaxZoomIn(0.25)
            ->setMaxZoomOut(4)
            ->setZoomDelta(1.5);

        $this->chart->getOptions()->setFocusTarget('datum');

        $this->chart->getOptions()->setFontSize(12);

        $this->chart->getOptions()->setFontName('Arial');

        $this->chart->getOptions()->setForceIFrame(false);

        $this->chart->getOptions()->getHAxis()
            ->setBaseline(5)
            ->setBaselineColor('black')
            ->setDirection(1)
            ->setFormat('decimal')
            ->getGridlines()
                ->setColor('#CCC')
                ->setCount(5);
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $this->chart->getOptions()->getHAxis()->getGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()
            ->setColor('black')
            ->setCount(0);
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $this->chart->getOptions()->getHAxis()->getMinorGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $this->chart->getOptions()->getHAxis()
            ->setLogScale(false)
            ->setScaleType('log')
            ->setTextPosition('out')
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(12)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('black');
        $this->chart->getOptions()->getHAxis()
            ->setTicks([5,10,15,20])
            ->setTitle('title')
            ->getTitleTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true);
        $this->chart->getOptions()->getHAxis()
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
        $this->chart->getOptions()->getHAxis()
            ->getViewWindow()
                ->setMax(100)
                ->setMin(1);

        $this->chart->getOptions()->setHeight(500);

        $this->chart->getOptions()->setIsStacked(false);

        $this->chart->getOptions()->getLegend()
            ->setPosition('right')
            ->setAlignment('start')
            ->getTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(10)
                ->setBold(false)
                ->setItalic(false);

        $this->chart->getOptions()->setOrientation('horizontal');

        $this->chart->getOptions()->setReverseCategories(false);

        $this->chart->getOptions()->setSeries([
            ['color' => 'black', 'visibleInLegend' => false], [], [],
            ['color' => 'red', 'visibleInLegend' => false]
        ]);

        $this->chart->getOptions()->setTheme('maximized');

        $this->chart->getOptions()->setTitle('Title');

        $this->chart->getOptions()->setTitlePosition('out');

        $this->chart->getOptions()->getTitleTextStyle()
            ->setColor('black')
            ->setFontName('Arial')
            ->setFontSize(18)
            ->setBold(false)
            ->setItalic(false);

        $this->chart->getOptions()->getTooltip()
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

        $this->chart->getOptions()->setTrendlines([new Trendlines(), new Trendlines()]);

        $vAxis1 = new VAxis();
        $vAxis1->setTitle('v1');
        $vAxis2 = new VAxis();
        $vAxis2->setTitle('v2');
        $this->chart->getOptions()->setVAxes([$vAxis1, $vAxis2]);

        $this->chart->getOptions()->getVAxis()
            ->setBaseline(5)
            ->setBaselineColor('black')
            ->setDirection(1)
            ->setFormat('decimal')
            ->getGridlines()
                ->setColor('#CCC')
                ->setCount(5);
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $this->chart->getOptions()->getVAxis()->getGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()
            ->setColor('black')
            ->setCount(0);
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getYears()->setFormat('yyyy');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMonths()->setFormat('M');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getDays()->setFormat('d');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getHours()->setFormat('H');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMinutes()->setFormat('i');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getSeconds()->setFormat('s');
        $this->chart->getOptions()->getVAxis()->getMinorGridlines()->getUnits()
            ->getMilliseconds()->setFormat('u');
        $this->chart->getOptions()->getVAxis()
            ->setLogScale(false)
            ->setScaleType('log')
            ->setTextPosition('out')
            ->getTextStyle()
                ->setFontName('Times-Roman')
                ->setFontSize(12)
                ->setBold(true)
                ->setItalic(true)
                ->setColor('black');
        $this->chart->getOptions()->getVAxis()
            ->setTicks([5,10,15,20])
            ->setTitle('title')
            ->getTitleTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true);
        $this->chart->getOptions()->getVAxis()
            ->setMaxValue(100)
            ->setMinValue(1)
            ->setViewWindowMode('pretty');
        $this->chart->getOptions()->getVAxis()
            ->getViewWindow()
                ->setMax(100)
                ->setMin(1);

        $this->chart->getOptions()->setWidth(700);
    }

    public function testJsColumnChart()
    {
        $js = $this->chart->startDraw() . $this->chart->endDraw();

        $this->assertContains('{"animation":{"startup":true,"duration":1000,"easing":"in"},"annotations":{"alwaysOutside":true,"boxStyle":{"stroke":"#888","strokeWidth":1,"rx":10,"ry":10},"datum":{"stem":{"color":"black","length":12},"style":"point"},"domain":{"stem":{"color":"black","length":5},"style":"point"},"highContrast":true,"stem":{"color":"black","length":5},"style":"point","textStyle":{"auraColor":"#d799ae","opacity":0.8,"bold":true,"italic":true,"color":"#871b47","fontName":"Times-Roman","fontSize":18}},"bar":{"groupWidth":"61.8%"},"dataOpacity":1,"explorer":{"actions":["dragToPan","rightClickToReset"],"axis":"vertical","keepInBounds":false,"maxZoomIn":0.25,"maxZoomOut":4,"zoomDelta":1.5},"focusTarget":"datum","hAxis":{"allowContainerBoundaryTextCufoff":false,"slantedText":false,"slantedTextAngle":30,"maxAlternation":2,"maxTextLines":5,"minTextSpacing":5,"showTextEvery":1,"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","logScale":false,"scaleType":"log","maxValue":100,"minValue":1,"ticks":[5,10,15,20],"gridlines":{"color":"#CCC","count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}}},"minorGridlines":{"color":"black","count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}}},"textPosition":"out","textStyle":{"bold":true,"italic":true,"color":"black","fontName":"Times-Roman","fontSize":12},"title":"title","titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"viewWindow":{"max":100,"min":1},"viewWindowMode":"pretty"},"isStacked":false,"legend":{"alignment":"start","position":"right","textStyle":{"bold":false,"italic":false,"color":"black","fontName":"Arial","fontSize":10}},"orientation":"horizontal","reverseCategories":false,"tooltip":{"ignoreBounds":false,"showColorCode":false,"textStyle":{"bold":false,"italic":false,"color":"black","fontName":"Arial","fontSize":10},"trigger":"focus","isHtml":false},"vAxes":[{"title":"v1"},{"title":"v2"}],"axisTitlesPosition":"out","series":{"0":{"color":"black","visibleInLegend":false},"3":{"color":"red","visibleInLegend":false}},"theme":"maximized","titlePosition":"out","vAxis":{"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","gridlines":{"color":"#CCC","count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}}},"minorGridlines":{"color":"black","count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}}},"logScale":false,"scaleType":"log","textPosition":"out","textStyle":{"bold":true,"italic":true,"color":"black","fontName":"Times-Roman","fontSize":12},"ticks":[5,10,15,20],"title":"title","titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"maxValue":100,"minValue":1,"viewWindowMode":"pretty","viewWindow":{"max":100,"min":1}},"backgroundColor":{"fill":"white","stroke":"#666","strokeWidth":0},"chartArea":{"backgroundColor":{"stroke":"black","strokeWidth":1},"height":"auto","left":"auto","top":"auto","width":"auto"},"colors":["red","#004411"],"fontSize":12,"fontName":"Arial","title":"Title","titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":false,"italic":false},"enableInteractivity":true,"forceIFrame":false,"height":500,"width":700}', $js);
    }
}
