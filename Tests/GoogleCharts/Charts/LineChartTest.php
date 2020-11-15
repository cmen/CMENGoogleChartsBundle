<?php

namespace CMEN\GoogleChartsBundle\Tests\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
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
class LineChartTest extends TestCase
{
    /** @var ChartOutputInterface */
    private $chartOutput;

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
        $chart = new LineChart();
        $chart->setElementID('div-chart')->getData()->setArrayToDataTable([
            [['label' => 'X', 'type' => 'number'], ['label' => 'Dogs', 'type' => 'number'],
                ['label' => 'Cats', 'type' => 'number'], ],
            [0, 0, 0],    [1, 10, 5],   [2, 23, 15],  [3, 17, 9],   [4, 18, 10],  [5, 9, 5],
            [6, 11, 3],   [7, 27, 19],  [8, 33, 25],  [9, 40, 32],  [10, 32, 24], [11, 35, 27],
            [12, 30, 22], [13, 40, 32], [14, 42, 34], [15, 47, 39], [16, 44, 36], [17, 48, 40],
            [18, 52, 44], [19, 54, 46], [20, 42, 34], [21, 55, 47], [22, 56, 48], [23, 57, 49],
            [24, 60, 52], [25, 50, 42], [26, 52, 44], [27, 51, 43], [28, 49, 41], [29, 53, 45],
            [30, 55, 47], [31, 60, 52], [32, 61, 53], [33, 59, 51], [34, 62, 54], [35, 65, 57],
            [36, 62, 54], [37, 58, 50], [38, 55, 47], [39, 61, 53], [40, 64, 56], [41, 65, 57],
            [42, 63, 55], [43, 66, 58], [44, 67, 59], [45, 69, 61], [46, 69, 61], [47, 70, 62],
            [48, 72, 64], [49, 68, 60], [50, 66, 58], [51, 65, 57], [52, 67, 59], [53, 70, 62],
            [54, 71, 63], [55, 72, 64], [56, 73, 65], [57, 75, 67], [58, 70, 62], [59, 68, 60],
            [60, 64, 56], [61, 60, 52], [62, 65, 57], [63, 67, 59], [64, 68, 60], [65, 69, 61],
            [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72],
        ]);

        $chart->getOptions()
            ->setAggregationTarget('auto')
            ->getAnimation()
                ->setDuration(0)
                ->setEasing('linear')
                ->setStartup(false);

        $chart->getOptions()
            ->getAnnotations()
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

        $chart->getOptions()
            ->setAxisTitlesPosition('out');

        //$chart->getOptions()->setBackgroundColor('red');
        $chart->getOptions()->getBackgroundColor()
            ->setStroke('#666')
            ->setStrokeWidth(0)
            ->setFill('white');

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

        $chart->getOptions()->getCrosshair()
            ->setColor('green')
            ->getFocused()
                ->setColor('#3bc')
                ->setOpacity(0.8);
        $chart->getOptions()->getCrosshair()
            ->setOpacity(1.0)
            ->setOrientation('both')
            ->getSelected()
                ->setColor('#3bc')
                ->setOpacity(0.8);
        $chart->getOptions()->getCrosshair()
            ->setTrigger('both');

        $chart->getOptions()
            ->setCurveType('none')
            ->setDataOpacity(1.0)
            ->setEnableInteractivity(true)
            ->getExplorer()
                ->setActions(['dragToPan', 'rightClickToReset'])
                ->setAxis('vertical')
                ->setKeepInBounds(false)
                ->setMaxZoomIn(0.25)
                ->setMaxZoomOut(4)
                ->setZoomDelta(1.5);

        $chart->getOptions()
            ->setFocusTarget('datum')
            ->setFontSize(14)
            ->setFontName('Arial')
            ->setForceIFrame(false);

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

        $chart->getOptions()
            ->setHeight(500)
            ->setInterpolateNulls(false);

        $chart->getOptions()->getLegend()
            ->setAlignment('start')
            ->setMaxLines(1)
            ->setPosition('right')
            ->getTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(10)
                ->setBold(false)
                ->setItalic(false);

        $chart->getOptions()
            ->setLineDashStyle([5, 1, 3])
            ->setLineWidth(2)
            ->setOrientation('horizontal')
            ->setPointShape('circle')
            ->setPointSize(0)
            ->setPointsVisible(true)
            ->setReverseCategories(false)
            ->setSelectionMode('single')
            ->setSeries([
                ['color' => 'black', 'visibleInLegend' => false], [], [],
                ['color' => 'red', 'visibleInLegend' => false],
            ])
            ->setTheme('maximized')
            ->setTitle('title')
            ->setTitlePosition('out')
            ->getTitleTextStyle()
                ->setColor('black')
                ->setFontName('Arial')
                ->setFontSize(18)
                ->setBold(true)
                ->setItalic(true);

        $chart->getOptions()
            ->getTooltip()
                ->setIgnoreBounds(false)
                ->setIsHtml(false)
                ->setShowColorCode(false)
                ->setTrigger('focus')
                ->getTextStyle()
                    ->setColor('black')
                    ->setFontName('Arial')
                    ->setFontSize(18)
                    ->setBold(true)
                    ->setItalic(true);

        $chart->getOptions()
            ->setTrendlines([new Trendlines()])
            ->setVAxes([new VAxis()]);

        $chart->getOptions()
            ->getVAxis()
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

        $chart->getOptions()->setWidth(500);

        /** @noinspection PhpUnhandledExceptionInspection */
        $js = $this->chartOutput->fullCharts($chart);

        $this->assertStringContainsString('{"animation":{"startup":false,"duration":0,"easing":"linear"}, "annotations":{"boxStyle":{"rx":10,"ry":10,"gradient":{"color1":"#fbf6a7","color2":"#33b679","x1":"0%","y1":"0%","x2":"100%","y2":"100%","useObjectBoundingBoxUnits":true},"stroke":"#888","strokeWidth":1},"datum":{"stem":{"length":12,"color":"black"},"style":"point"},"domain":{"stem":{"length":5,"color":"black"},"style":"point"},"highContrast":true,"stem":{"length":5,"color":"black"},"style":"point","textStyle":{"auraColor":"#d799ae","color":"#871b47","fontName":"Times-Roman","fontSize":18,"bold":true,"italic":true,"opacity":0.8}}, "crosshair":{"focused":{"color":"#3bc","opacity":0.8},"selected":{"color":"#3bc","opacity":0.8},"trigger":"both","color":"green","opacity":1,"orientation":"both"}, "explorer":{"actions":["dragToPan","rightClickToReset"],"axis":"vertical","keepInBounds":false,"maxZoomIn":0.25,"maxZoomOut":4,"zoomDelta":1.5}, "hAxis":{"allowContainerBoundaryTextCufoff":false,"slantedText":false,"slantedTextAngle":30,"maxAlternation":2,"maxTextLines":5,"minTextSpacing":5,"showTextEvery":1,"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","logScale":false,"scaleType":"log","maxValue":100,"minValue":1,"ticks":[5,10,15,20],"gridlines":{"count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"#CCC"},"minorGridlines":{"count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"black"},"textPosition":"out","textStyle":{"color":"black","fontName":"Times-Roman","fontSize":12,"bold":true,"italic":true},"titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"viewWindow":{"max":100,"min":1},"viewWindowMode":"pretty","title":"title"}, "legend":{"maxLines":1,"alignment":"start","position":"right","textStyle":{"color":"black","fontName":"Arial","fontSize":10,"bold":false,"italic":false}}, "tooltip":{"ignoreBounds":false,"showColorCode":false,"textStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"isHtml":false,"trigger":"focus"}, "vAxis":{"baseline":5,"baselineColor":"black","direction":1,"format":"decimal","gridlines":{"count":5,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"#CCC"},"minorGridlines":{"count":0,"units":{"years":{"format":"yyyy"},"months":{"format":"M"},"days":{"format":"d"},"hours":{"format":"H"},"minutes":{"format":"i"},"seconds":{"format":"s"},"milliseconds":{"format":"u"}},"color":"black"},"logScale":false,"scaleType":"log","textPosition":"out","textStyle":{"color":"black","fontName":"Times-Roman","fontSize":12,"bold":true,"italic":true},"ticks":[5,10,15,20],"titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true},"maxValue":100,"minValue":1,"viewWindowMode":"pretty","viewWindow":{"max":100,"min":1},"title":"title"}, "backgroundColor":{"stroke":"#666","strokeWidth":0,"fill":"white"}, "chartArea":{"backgroundColor":{"stroke":"black","strokeWidth":1},"height":"auto","left":"auto","top":"auto","width":"auto"}, "titleTextStyle":{"color":"black","fontName":"Arial","fontSize":18,"bold":true,"italic":true}, "forceIFrame":false, "height":500, "width":500, "enableInteractivity":true, "colors":["red","#004411"], "fontName":"Arial", "fontSize":14, "title":"title", "axisTitlesPosition":"out", "series":{"0":{"color":"black","visibleInLegend":false},"3":{"color":"red","visibleInLegend":false}}, "theme":"maximized", "titlePosition":"out", "aggregationTarget":"auto", "lineDashStyle":[5,1,3], "lineWidth":2, "pointShape":"circle", "pointSize":0, "pointsVisible":true, "curveType":"none", "dataOpacity":1, "focusTarget":"datum", "interpolateNulls":false, "orientation":"horizontal", "reverseCategories":false, "selectionMode":"single"};', $js);
    }
}
