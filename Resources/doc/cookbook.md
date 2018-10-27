# Cookbook
Here, you can find recipes to recreate charts demo in [Google documentation](https://google-developers.appspot.com/chart/interactive/docs/gallery).

## Annotation Chart
```php
$anno = new AnnotationChart();
$anno->getData()->setArrayToDataTable([
    [['label' => 'Date', 'type' => 'date'], ['label' => 'Kepler-22b mission', 'type' => 'number'],
     ['label' => 'Kepler title', 'type' => 'string'], ['label' => 'Kepler text', 'type' => 'string'],
     ['label' => 'Gliese 163 mission', 'type' => 'number'], ['label' => 'Gliese title', 'type' => 'string'],
     ['label' => 'Gliese text', 'type' => 'string']
    ],
    [new DateTime('2314-02-15'), 12400, 'undefined', 'undefined', 10645, 'undefined', 'undefined'],
    [new DateTime('2314-02-16'), 24045, 'Lalibertines', 'First encounter', 12374, 'undefined', 'undefined'],
    [new DateTime('2314-02-17'), 35022, 'Lalibertines', 'They are very tall', 15766, 'Gallantors', 'First Encounter'],
    [new DateTime('2314-02-18'), 12284, 'Lalibertines', 'Attack on our crew!', 34334, 'Gallantors', 'Statement of shared principles'],
    [new DateTime('2314-02-19'), 8476, 'Lalibertines', 'Heavy casualties', 66467, 'Gallantors', 'Mysteries revealed'],
    [new DateTime('2314-02-20'), 0, 'Lalibertines', 'All crew lost', 79463, 'Gallantors', 'Omniscience achieved']
]);
$anno->getOptions()->setDisplayAnnotations(true);
```

## Area Chart
```php
$area = new AreaChart();
$area->getData()->setArrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
]);
$area->getOptions()->setTitle('Company Performance');
$area->getOptions()->getHAxis()->setTitle('Year');
$area->getOptions()->getHAxis()->getTitleTextStyle()->setColor('#333');
$area->getOptions()->getVAxis()->setMinValue(0);
```

## Bar Chart
```php
$bar = new BarChart();
$bar->getData()->setArrayToDataTable([
    ['City', '2010 Population', '2000 Population'],
    ['New York City, NY', 8175000, 8008000],
    ['Los Angeles, CA', 3792000, 3694000],
    ['Chicago, IL', 2695000, 2896000],
    ['Houston, TX', 2099000, 1953000],
    ['Philadelphia, PA', 1526000, 1517000]
]);
$bar->getOptions()->setTitle('Population of Largest U.S. Cities');
$bar->getOptions()->getHAxis()->setTitle('Population of Largest U.S. Cities');
$bar->getOptions()->getHAxis()->setMinValue(0);
$bar->getOptions()->getVAxis()->setTitle('City');
$bar->getOptions()->setWidth(900);
$bar->getOptions()->setHeight(500);
```

## Bar Chart (Material)
Warning : the Material Charts are in beta.

![Material Bar Chart](http://static.christophe-meneses.fr/img/google_charts_bundle/matbar.png) 

```php
$chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\BarChart();
$chart->getData()->setArrayToDataTable([
    ['Galaxy', 'Distance', 'Brightness'],
    ['Canis Major Dwarf', 8000, 23.3],
    ['Sagittarius Dwarf', 24000, 4.5],
    ['Ursa Major II Dwarf', 30000, 14.3],
    ['Lg. Magellanic Cloud', 50000, 0.9],
    ['Bootes I', 60000, 13.1]
]);

$chart->getOptions()->getChart()
    ->setTitle('Nearby galaxies')
    ->setSubtitle('distance on the left, brightness on the right');
$chart->getOptions()
    ->setHeight(400)
    ->setWidth(900)
    ->setSeries([['axis' => 'distance'], ['axis' => 'brightness']])
    ->setAxes(['x' => [
        'distance' => ['label' => 'parsecs'],
        'brightness' => ['side' => 'top', 'label' => 'apparent magnitude']]
    ]);
```

## Bubble Chart
```php
$bubble = new BubbleChart();
$bubble->getData()->setArrayToDataTable([
    ['ID', 'Life Expectancy', 'Fertility Rate', 'Region',     'Population'],
    ['CAN',    80.66,              1.67,      'North America',  33739900],
    ['DEU',    79.84,              1.36,      'Europe',         81902307],
    ['DNK',    78.6,               1.84,      'Europe',         5523095],
    ['EGY',    72.73,              2.78,      'Middle East',    79716203],
    ['GBR',    80.05,              2,         'Europe',         61801570],
    ['IRN',    72.49,              1.7,       'Middle East',    73137148],
    ['IRQ',    68.09,              4.77,      'Middle East',    31090763],
    ['ISR',    81.55,              2.96,      'Middle East',    7485600],
    ['RUS',    68.6,               1.54,      'Europe',         141850000],
    ['USA',    78.09,              2.05,      'North America',  307007000]
]);
$bubble->getOptions()->setTitle('Correlation between life expectancy, fertility rate and population of
 some world countries (2010)');
$bubble->getOptions()->getHAxis()->setTitle('Life Expectancy');
$bubble->getOptions()->getVAxis()->setTitle('Fertility Rate');
$bubble->getOptions()->getBubble()->getTextStyle()->setFontSize(12);
$bubble->getOptions()->getBubble()->getTextStyle()->setFontName('Times-Roman');
$bubble->getOptions()->getBubble()->getTextStyle()->setColor('green');
$bubble->getOptions()->getBubble()->getTextStyle()->setBold(true);
$bubble->getOptions()->getBubble()->getTextStyle()->setItalic(true);
$bubble->getOptions()->getBubble()->getTextStyle()->setAuraColor('none');
$bubble->getOptions()->getBubble()->getTextStyle()->setOpacity(0.80);
$bubble->getOptions()->setWidth(900);
$bubble->getOptions()->setHeight(500);
```

## Calendar Chart
```php
$cal = new CalendarChart();
$cal->getData()->setArrayToDataTable(
    [
        [['label' => 'Date', 'type' => 'date'], ['label' => 'Attendance', 'type' => 'number']],
        [ new DateTime('2012-03-13'), 37032 ],
        [ new DateTime('2012-03-14'), 38024 ],
        [ new DateTime('2012-03-15'), 38024 ],
        [ new DateTime('2012-03-16'), 38108 ],
        [ new DateTime('2012-03-17'), 38229 ],
        [ new DateTime('2012-03-18'), 38177 ],
        [ new DateTime('2012-03-19'), 38705 ],
        [ new DateTime('2012-03-20'), 38210 ],
        [ new DateTime('2012-03-21'), 38029 ],
        [ new DateTime('2012-03-22'), 38823 ],
        [ new DateTime('2012-03-23'), 38345 ],
        [ new DateTime('2012-03-24'), 38436 ],
        [ new DateTime('2012-03-25'), 38447 ]
    ]
);
$cal->getOptions()->setTitle('Red Sox Attendance');
$cal->getOptions()->setHeight(350);
$cal->getOptions()->setWidth(1000);
$cal->getOptions()->getCalendar()->setCellSize(20);
$cal->getOptions()->getCalendar()->getCellColor()->setStroke('#76a7fa');
$cal->getOptions()->getCalendar()->getCellColor()->setStrokeOpacity(0.5);
$cal->getOptions()->getCalendar()->getCellColor()->setStrokeWidth(1);
$cal->getOptions()->getCalendar()->getFocusedCellColor()->setStroke('#d3362d');
$cal->getOptions()->getCalendar()->getFocusedCellColor()->setStrokeOpacity(1);
$cal->getOptions()->getCalendar()->getFocusedCellColor()->setStrokeWidth(1);
$cal->getOptions()->getCalendar()->getDayOfWeekLabel()->setFontName('Times-Roman');
$cal->getOptions()->getCalendar()->getDayOfWeekLabel()->setFontSize(12);
$cal->getOptions()->getCalendar()->getDayOfWeekLabel()->setColor('#1a8763');
$cal->getOptions()->getCalendar()->getDayOfWeekLabel()->setBold(true);
$cal->getOptions()->getCalendar()->getDayOfWeekLabel()->setItalic(true);
$cal->getOptions()->getCalendar()->setDayOfWeekRightSpace(10);
$cal->getOptions()->getCalendar()->setDaysOfWeek('DLMMJVS');
$cal->getOptions()->getCalendar()->getMonthLabel()->setFontName('Times-Roman');
$cal->getOptions()->getCalendar()->getMonthLabel()->setFontSize(12);
$cal->getOptions()->getCalendar()->getMonthLabel()->setColor('#981b48');
$cal->getOptions()->getCalendar()->getMonthLabel()->setBold(true);
$cal->getOptions()->getCalendar()->getMonthLabel()->setItalic(true);
$cal->getOptions()->getCalendar()->getMonthOutlineColor()->setStroke('#981b48');
$cal->getOptions()->getCalendar()->getMonthOutlineColor()->setStrokeOpacity(0.8);
$cal->getOptions()->getCalendar()->getMonthOutlineColor()->setStrokeWidth(2);
$cal->getOptions()->getCalendar()->getUnusedMonthOutlineColor()->setStroke('#bc5679');
$cal->getOptions()->getCalendar()->getUnusedMonthOutlineColor()->setStrokeOpacity(0.8);
$cal->getOptions()->getCalendar()->getUnusedMonthOutlineColor()->setStrokeWidth(1);
$cal->getOptions()->getCalendar()->setUnderMonthSpace(16);
$cal->getOptions()->getCalendar()->setUnderYearSpace(10);
$cal->getOptions()->getCalendar()->getYearLabel()->setFontName('Times-Roman');
$cal->getOptions()->getCalendar()->getYearLabel()->setFontSize(32);
$cal->getOptions()->getCalendar()->getYearLabel()->setColor('#1A8763');
$cal->getOptions()->getCalendar()->getYearLabel()->setBold(true);
$cal->getOptions()->getCalendar()->getYearLabel()->setItalic(true);
```

## Candlestick Chart
```php
$candle = new CandlestickChart();
$candle->getData()->setArrayToDataTable([
    ['Mon', 28, 28, 38, 38],
    ['Tue', 38, 38, 55, 55],
    ['Wed', 55, 55, 77, 77],
    ['Thu', 77, 77, 66, 66],
    ['Fri', 66, 66, 22, 22]
    // Treat the first row as data.
], true);
$candle->getOptions()->getLegend()->setPosition('none');
$candle->getOptions()->getBar()->setGroupWidth('100%');
$candle->getOptions()->getCandlestick()->getFallingColor()->setStrokeWidth(0);
$candle->getOptions()->getCandlestick()->getFallingColor()->setFill('#a52714');
$candle->getOptions()->getCandlestick()->getRisingColor()->setStrokeWidth(0);
$candle->getOptions()->getCandlestick()->getRisingColor()->setFill('#0f9d58');
$candle->getOptions()->setWidth(900);
$candle->getOptions()->setHeight(500);
```

## Column Chart
```php
$col = new ColumnChart();
$col->getData()->setArrayToDataTable(
    [
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
    ]
);
$col->getOptions()->setTitle('Motivation and Energy Level Throughout the Day');
$col->getOptions()->getAnnotations()->setAlwaysOutside(true);
$col->getOptions()->getAnnotations()->getTextStyle()->setFontSize(14);
$col->getOptions()->getAnnotations()->getTextStyle()->setColor('#000');
$col->getOptions()->getAnnotations()->getTextStyle()->setAuraColor('none');
$col->getOptions()->getHAxis()->setTitle('Time of Day');
$col->getOptions()->getHAxis()->setFormat('h:mm a');
$col->getOptions()->getHAxis()->getViewWindow()->setMin([7, 30, 0]);
$col->getOptions()->getHAxis()->getViewWindow()->setMax([17, 30, 0]);
$col->getOptions()->getVAxis()->setTitle('Rating (scale of 1-10)');
$col->getOptions()->setWidth(900);
$col->getOptions()->setHeight(500);
```

## Column Chart (Material)
Warning : the Material Charts are in beta.

![Material Column Chart](http://static.christophe-meneses.fr/img/google_charts_bundle/matcol.png) 

```php
$chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart();
$chart->getData()->setArrayToDataTable([
    ['Year', 'Sales', 'Expenses', 'Profit'],
    ['2014', 1000, 400, 200],
    ['2015', 1170, 460, 250],
    ['2016', 660, 1120, 300],
    ['2017', 1030, 540, 350]
]);

$chart->getOptions()->getChart()
    ->setTitle('Company Performance')
    ->setSubtitle('Sales, Expenses, and Profit: 2014-2017');
$chart->getOptions()
    ->setBars('vertical')
    ->setHeight(400)
    ->setWidth(900)
    ->setColors(['#1b9e77', '#d95f02', '#7570b3'])
    ->getVAxis()
        ->setFormat('decimal');
```

## Combo Chart
```php
$combo = new ComboChart();
$combo->getData()->setArrayToDataTable([
    ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
    ['2004/05',  165,      938,         522,             998,           450,      614.6],
    ['2005/06',  135,      1120,        599,             1268,          288,      682],
    ['2006/07',  157,      1167,        587,             807,           397,      623],
    ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    ['2008/09',  136,      691,         629,             1026,          366,      569.6]
]);
$combo->getOptions()->setTitle('Monthly Coffee Production by Country');
$combo->getOptions()->getVAxis()->setTitle('Cups');
$combo->getOptions()->getHAxis()->setTitle('Month');
$combo->getOptions()->setSeriesType('bars');

$series5 = new \CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series();
$series5->setType('line');
$combo->getOptions()->setSeries([5 => $series5]);

$combo->getOptions()->setWidth(900);
$combo->getOptions()->setHeight(500);
```

## Combo Chart with multiple vertical axes
```php
$data[] = ['Year', 'Income', ['role' => 'tooltip'], 'Cost', ['role' => 'tooltip'], 'Evolution', ['role' => 'tooltip']];
$data[] = ['2012', 106756, '106 756 €', 67450, '67 450 €', 12.54, '12.54 %'];
$data[] = ['2013', 153765, '153 765 €', 82345, '82 345 €', 18.12, '18.12 %'];
$data[] = ['2014', 198450, '198 450 €', 73984, '73 984 €', 8.68, '8.68 %'];

$chart = new ComboChart();
$chart->getData()->setArrayToDataTable($data);
$chart->getOptions()->setHeight(600);
$chart->getOptions()->setWidth(900);
$chart->getOptions()->getTooltip()->getTextStyle()->setBold(true);

$vAxis1 = new VAxis();
$vAxis1->setTitle('Amount (€)');
$vAxis2 = new VAxis();
$vAxis2->setTitle('Evolution (%)');
$chart->getOptions()->setVAxes([$vAxis1, $vAxis2]);

/* Income */
$series1 = new \CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series();
$series1->setType('bars');
$series1->setTargetAxisIndex(0);
$series1->setColor('#00ff00');

/* Cost */
$series2 = new \CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series();
$series2->setType('bars');
$series2->setTargetAxisIndex(0);
$series2->setColor('#ff0000');

/* Evolution */
$series3 = new \CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series();
$series3->setType('line');
$series3->setTargetAxisIndex(1);
$series3->setColor('#f6dc12');

$chart->getOptions()->setSeries([$series1, $series2, $series3]);

$chart->getOptions()->getHAxis()->setTitle('Year');
```

## Candlestick Chart
```php
$candle = new CandlestickChart();
$candle->getData()->setArrayToDataTable([
    ['Mon', 28, 28, 38, 38],
    ['Tue', 38, 38, 55, 55],
    ['Wed', 55, 55, 77, 77],
    ['Thu', 77, 77, 66, 66],
    ['Fri', 66, 66, 22, 22]
], true);
$candle->getOptions()->getLegend()->setPosition('none');
$candle->getOptions()->getBar()->setGroupWidth('100%');
$candle->getOptions()->getCandlestick()->getFallingColor()->setStrokeWidth(0);
$candle->getOptions()->getCandlestick()->getFallingColor()->setFill('#a52714');
$candle->getOptions()->getCandlestick()->getRisingColor()->setStrokeWidth(0);
$candle->getOptions()->getCandlestick()->getRisingColor()->setFill('#0f9d58');
$candle->getOptions()->setWidth(900);
$candle->getOptions()->setHeight(500);
```

## Gantt Chart
```php
$gantt = new GanttChart();
$gantt->getData()->setArrayToDataTable([
    [['label' => 'Task ID', 'type' => 'string'], ['label' => 'Task Name', 'type' => 'string'],
        ['label' => 'Resource', 'type' => 'string'], ['label' => 'Start Date', 'type' => 'date'],
        ['label' => 'End Date', 'type' => 'date'], ['label' => 'Duration', 'type' => 'number'],
        ['label' => 'Percent Complete', 'type' => 'number'], ['label' => 'Dependencies', 'type' => 'string']],
    ['2014Spring', 'Spring 2014', 'spring',
        new DateTime('2014-02-22'), new DateTime('2014-05-20'), null, 100, null],
    ['2014Summer', 'Summer 2014', 'summer',
        new DateTime('2014-05-21'), new DateTime('2014-08-20'), null, 100, null],
    ['2014Autumn', 'Autumn 2014', 'autumn',
        new DateTime('2014-08-21'), new DateTime('2014-11-20'), null, 100, null],
    ['2014Winter', 'Winter 2014', 'winter',
        new DateTime('2014-11-21'), new DateTime('2015-02-21'), null, 100, null],
    ['2015Spring', 'Spring 2015', 'spring',
        new DateTime('2015-2-22'), new DateTime('2015-5-20'), null, 50, null],
    ['2015Summer', 'Summer 2015', 'summer',
        new DateTime('2015-5-21'), new DateTime('2015-8-20'), null, 0, null],
    ['2015Autumn', 'Autumn 2015', 'autumn',
        new DateTime('2015-8-21'), new DateTime('2015-11-20'), null, 0, null],
    ['2015Winter', 'Winter 2015', 'winter',
        new DateTime('2015-11-21'), new DateTime('2016-2-21'), null, 0, null],
    ['Football', 'Football Season', 'sports',
        new DateTime('2014-8-4'), new DateTime('2015-1-1'), null, 100, null],
    ['Baseball', 'Baseball Season', 'sports',
        new DateTime('2015-2-31'), new DateTime('2015-9-20'), null, 14, null],
    ['Basketball', 'Basketball Season', 'sports',
        new DateTime('2014-9-28'), new DateTime('2015-5-20'), null, 86, null],
    ['Hockey', 'Hockey Season', 'sports',
        new DateTime('2014-9-8'), new DateTime('2015-5-21'), null, 89, null]
]);
$gantt->getOptions()->setHeight(400);
$gantt->getOptions()->getGantt()->setTrackHeight(30);
$gantt->getOptions()->setWidth(900);
```

## Gauge Chart
```php
$gauge = new GaugeChart();
$gauge->getData()->setArrayToDataTable([
    ['Label', 'Value'],
    ['Memory', 80],
    ['CPU', 55],
    ['Network', 68]
]);
$gauge->getOptions()->setWidth(400);
$gauge->getOptions()->setHeight(120);
$gauge->getOptions()->setRedFrom(90);
$gauge->getOptions()->setRedTo(100);
$gauge->getOptions()->setYellowFrom(75);
$gauge->getOptions()->setYellowTo(90);
$gauge->getOptions()->setGreenFrom(0);
$gauge->getOptions()->setGreenTo(75);
$gauge->getOptions()->setMinorTicks(5);
```

## Geo Chart
```php
$geo = new GeoChart();
$geo->getData()->setArrayToDataTable(
    [
        ['City',   'Population', 'Area'],
        ['Rome',      2761477,    1285.31],
        ['Milan',     1324110,    181.76],
        ['Naples',    959574,     117.27],
        ['Turin',     907563,     130.17],
        ['Palermo',   655875,     158.9],
        ['Genoa',     607906,     243.60],
        ['Bologna',   380181,     140.7],
        ['Florence',  371282,     102.41],
        ['Fiumicino', 67370,      213.44],
        ['Anzio',     52192,      43.43],
        ['Ciampino',  38262,      11]
    ]
);
$geo->getOptions()->setRegion('IT');
$geo->getOptions()->setDisplayMode('markers');
$geo->getOptions()->getColorAxis()->setColors(['green', 'blue']);
$geo->getOptions()->setWidth(900);
$geo->getOptions()->setHeight(500);
```

## Histogram
```php
$histo = new Histogram();
$histo->getData()->setArrayToDataTable([
    ['Dinosaur', 'Length'],
    ['Acrocanthosaurus (top-spined lizard)', 12.2],
    ['Albertosaurus (Alberta lizard)', 9.1],
    ['Allosaurus (other lizard)', 12.2],
    ['Apatosaurus (deceptive lizard)', 22.9],
    ['Archaeopteryx (ancient wing)', 0.9],
    ['Argentinosaurus (Argentina lizard)', 36.6],
    ['Baryonyx (heavy claws)', 9.1],
    ['Brachiosaurus (arm lizard)', 30.5],
    ['Ceratosaurus (horned lizard)', 6.1],
    ['Coelophysis (hollow form)', 2.7],
    ['Compsognathus (elegant jaw)', 0.9],
    ['Deinonychus (terrible claw)', 2.7],
    ['Diplodocus (double beam)', 27.1],
    ['Dromicelomimus (emu mimic)', 3.4],
    ['Gallimimus (fowl mimic)', 5.5],
    ['Mamenchisaurus (Mamenchi lizard)', 21.0],
    ['Megalosaurus (big lizard)', 7.9],
    ['Microvenator (small hunter)', 1.2],
    ['Ornithomimus (bird mimic)', 4.6],
    ['Oviraptor (egg robber)', 1.5],
    ['Plateosaurus (flat lizard)', 7.9],
    ['Sauronithoides (narrow-clawed lizard)', 2.0],
    ['Seismosaurus (tremor lizard)', 45.7],
    ['Spinosaurus (spiny lizard)', 12.2],
    ['Supersaurus (super lizard)', 30.5],
    ['Tyrannosaurus (tyrant lizard)', 15.2],
    ['Ultrasaurus (ultra lizard)', 30.5],
    ['Velociraptor (swift robber)', 1.8]]);
$histo->getOptions()->setTitle('Lengths of dinosaurs, in meters');
$histo->getOptions()->setWidth(900);
$histo->getOptions()->setHeight(500);
$histo->getOptions()->getLegend()->setPosition('none');
$histo->getOptions()->setColors(['green']);
```

## Line Chart
```php
$line = new LineChart();
$line->getData()->setArrayToDataTable(
    [
    [['label' => 'x', 'type' => 'number'], ['label' => 'values', 'type' => 'number'],
    ['id' =>'i0', 'type' => 'number', 'role' =>'interval'],
    ['id' =>'i1', 'type' => 'number', 'role' =>'interval'],
    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
    ['id' =>'i2', 'type' => 'number', 'role' =>'interval'],
    ['id' =>'i2', 'type' => 'number', 'role' =>'interval']],
    [1, 100, 90, 110, 85, 96, 104, 120],
    [2, 120, 95, 130, 90, 113, 124, 140],
    [3, 130, 105, 140, 100, 117, 133, 139],
    [4, 90, 85, 95, 85, 88, 92, 95],
    [5, 70, 74, 63, 67, 69, 70, 72],
    [6, 30, 39, 22, 21, 28, 34, 40],
    [7, 80, 77, 83, 70, 77, 85, 90],
    [8, 100, 90, 110, 85, 95, 102, 110]
    ]
);
$line->getOptions()->setTitle('Line intervals, default');
$line->getOptions()->setCurveType('function');
$line->getOptions()->setLineWidth(4);
$line->getOptions()->getLegend()->setPosition('none');
```

## Line Chart (Material)
Warning : the Material Charts are in beta.

![Material Line Chart](http://static.christophe-meneses.fr/img/google_charts_bundle/matline.png) 

```php
$chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\LineChart();
$chart->getData()->setArrayToDataTable([
    ['Month', 'Average Temperature', 'Average Hours of Daylight'],
    [new DateTime('2014-01'),  -.5,  5.7],
    [new DateTime('2014-02'),   .4,  8.7],
    [new DateTime('2014-03'),   .5,   12],
    [new DateTime('2014-04'),  2.9, 15.3],
    [new DateTime('2014-05'),  6.3, 18.6],
    [new DateTime('2014-06'),    9, 20.9],
    [new DateTime('2014-07'), 10.6, 19.8],
    [new DateTime('2014-08'), 10.3, 16.6],
    [new DateTime('2014-09'),  7.4, 13.3],
    [new DateTime('2014-10'),  4.4,  9.9],
    [new DateTime('2014-11'), 1.1,  6.6],
    [new DateTime('2014-12'), -.2,  4.5]
]);

$chart->getOptions()->getChart()
    ->setTitle('Average Temperatures and Daylight in Iceland Throughout the Year');
$chart->getOptions()
    ->setHeight(400)
    ->setWidth(900)
    ->setSeries([['axis' => 'Temps'], ['axis' => 'Daylight']])
    ->setAxes(['y' => ['Temps' => ['label' => 'Temps (Celsius)'], 'Daylight' => ['label' => 'Daylight']]]);
```

## Map
```php
$map = new Map();
$map->getData()->setArrayToDataTable(
    [
        ['Lake Buena Vista, FL 32830, United States',                  'Walt Disney World'],
        ['6000 Universal Boulevard, Orlando, FL 32819, United States', 'Universal Studios'],
        ['7007 Sea World Drive, Orlando, FL 32821, United States',     'Seaworld Orlando' ]
    ],
    true
);
$map->getOptions()->setMapType('styledMap');
$map->getOptions()->setZoomLevel(12);
$map->getOptions()->setShowTip(true);
$map->getOptions()->setUseMapTypeControl(true);
$map->getOptions()->setMaps(
    ['styledMap' => [
        'name' => 'Styled Map',
        'styles' => [
            ['featureType' => 'poi.attraction', 'stylers' => [['color' => '#fce8b2']]],
            ['featureType' => 'road.highway', 'stylers' => [['color' => '#0277bd', 'saturation' => -50]]],
            ['featureType' => 'road.highway', 'elementType' => 'labels.icon',
                'stylers' => [['hue' => '#000', 'saturation' => 100, 'lightness' => 50]]],
            ['featureType' => 'landscape',
                'stylers' => [['hue' => '#259b24', 'saturation' => 10, 'lightness' => -22]]]
        ]
    ]]
);
```

## Org Chart
```php
$org = new OrgChart();
$org->getData()->setArrayToDataTable(
    [
        [['v' => 'Mike', 'f' => 'Mike<div style="color:red; font-style:italic">President</div>'], '', 'The President'],
        [['v' => 'Jim', 'f' => 'Jim<div style="color:red; font-style:italic">Vice President</div>'], 'Mike', 'VP'],
        ['Alice', 'Mike', ''],
        ['Bob', 'Jim', 'Bob Sponge'],
        ['Carol', 'Bob', '']
    ],
    true
);
$org->getOptions()->setAllowHtml(true);
```

## Pie Chart
```php
$pieChart = new PieChart();
$pieChart->getData()->setArrayToDataTable(
    [
        ['Pac Man', 'Percentage'],
        ['', 75],
        ['', 25]
    ]
);
$pieChart->getOptions()->getLegend()->setPosition('none');
$pieChart->getOptions()->setPieSliceText('none');
$pieChart->getOptions()->setPieStartAngle(135);

$pieSlice1 = new PieSlice();
$pieSlice1->setColor('yellow');
$pieSlice2 = new PieSlice();
$pieSlice2->setColor('transparent');
$pieChart->getOptions()->setSlices([$pieSlice1, $pieSlice2]);

$pieChart->getOptions()->setHeight(500);
$pieChart->getOptions()->setWidth(900);
$pieChart->getOptions()->getTooltip()->setTrigger('none');
```

## Sankey Diagram
```php
$sankey = new SankeyDiagram();
$sankey->getData()->setArrayToDataTable(
    [
        [['label' => 'From', 'type' => 'string'], ['label' => 'To', 'type' => 'string'],
            ['label' => 'Weight', 'type' => 'number']],
        [ 'Brazil', 'Portugal', 5 ],
        [ 'Brazil', 'France', 1 ],
        [ 'Brazil', 'Spain', 1 ],
        [ 'Brazil', 'England', 1 ],
        [ 'Canada', 'Portugal', 1 ],
        [ 'Canada', 'France', 5 ],
        [ 'Canada', 'England', 1 ],
        [ 'Mexico', 'Portugal', 1 ],
        [ 'Mexico', 'France', 1 ],
        [ 'Mexico', 'Spain', 5 ],
        [ 'Mexico', 'England', 1 ],
        [ 'USA', 'Portugal', 1 ],
        [ 'USA', 'France', 1 ],
        [ 'USA', 'Spain', 1 ],
        [ 'USA', 'England', 5 ],
        [ 'Portugal', 'Angola', 2 ],
        [ 'Portugal', 'Senegal', 1 ],
        [ 'Portugal', 'Morocco', 1 ],
        [ 'Portugal', 'South Africa', 3 ],
        [ 'France', 'Angola', 1 ],
        [ 'France', 'Senegal', 3 ],
        [ 'France', 'Mali', 3 ],
        [ 'France', 'Morocco', 3 ],
        [ 'France', 'South Africa', 1 ],
        [ 'Spain', 'Senegal', 1 ],
        [ 'Spain', 'Morocco', 3 ],
        [ 'Spain', 'South Africa', 1 ],
        [ 'England', 'Angola', 1 ],
        [ 'England', 'Senegal', 1 ],
        [ 'England', 'Morocco', 2 ],
        [ 'England', 'South Africa', 7 ],
        [ 'South Africa', 'China', 5 ],
        [ 'South Africa', 'India', 1 ],
        [ 'South Africa', 'Japan', 3 ],
        [ 'Angola', 'China', 5 ],
        [ 'Angola', 'India', 1 ],
        [ 'Angola', 'Japan', 3 ],
        [ 'Senegal', 'China', 5 ],
        [ 'Senegal', 'India', 1 ],
        [ 'Senegal', 'Japan', 3 ],
        [ 'Mali', 'China', 5 ],
        [ 'Mali', 'India', 1 ],
        [ 'Mali', 'Japan', 3 ],
        [ 'Morocco', 'China', 5 ],
        [ 'Morocco', 'India', 1 ],
        [ 'Morocco', 'Japan', 3 ]
    ]
);
$sankey->getOptions()->setWidth(900);
$sankey->getOptions()->setHeight(600);
$sankey->getOptions()->getSankey()->getNode()->setColors(['#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f', '#cab2d6', '#ffff99', '#1f78b4', '#33a02c']);
$sankey->getOptions()->getSankey()->getLink()->setColors(['#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f', '#cab2d6', '#ffff99', '#1f78b4', '#33a02c']);
$sankey->getOptions()->getSankey()->getLink()->setColorMode('gradient');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setFontName('Times-Roman');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setFontSize(14);
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setColor('#871b47');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setItalic(true);
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setBold(true);
$sankey->getOptions()->getSankey()->getNode()->setNodePadding(60);
```

## Scatter Chart
```php
$scatter = new ScatterChart();
$scatter->getData()->setArrayToDataTable([
    ['Age', 'Weight'],
    [ 8,      12],
    [ 4,      5.5],
    [ 11,     14],
    [ 4,      5],
    [ 3,      3.5],
    [ 6.5,    7]
]);
$scatter->getOptions()->setTitle('Age vs. Weight comparison');
$scatter->getOptions()->getHAxis()->setTitle('Age');
$scatter->getOptions()->getHAxis()->setMinValue(0);
$scatter->getOptions()->getHAxis()->setMaxValue(15);
$scatter->getOptions()->getVAxis()->setTitle('Weight');
$scatter->getOptions()->getVAxis()->setMinValue(0);
$scatter->getOptions()->getVAxis()->setMaxValue(15);
$scatter->getOptions()->getLegend()->setPosition('none');
```

## Scatter Chart (Material)
Warning : the Material Charts are in beta.

![Material Scatter Chart](http://static.christophe-meneses.fr/img/google_charts_bundle/matscat.png) 

```php
$chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ScatterChart();
$chart->getData()->setArrayToDataTable([
    ['Student ID', 'Hours Studied', 'Final'],
    [0, 0, 67],  [1, 1, 88],   [2, 2, 77],
    [3, 3, 93],  [4, 4, 85],   [5, 5, 91],
    [6, 6, 71],  [7, 7, 78],   [8, 8, 93],
    [9, 9, 80],  [10, 10, 82], [11, 0, 75],
    [12, 5, 80], [13, 3, 90],  [14, 1, 72],
    [15, 5, 75], [16, 6, 68],  [17, 7, 98],
    [18, 3, 82], [19, 9, 94],  [20, 2, 79],
    [21, 2, 95], [22, 2, 86],  [23, 3, 67],
    [24, 4, 60], [25, 2, 80],  [26, 6, 92],
    [27, 2, 81], [28, 8, 79],  [29, 9, 83]
]);

$chart->getOptions()->getChart()
    ->setTitle('Students\' Final Grades')
    ->setSubtitle('based on hours studied');
$chart->getOptions()
    ->setHeight(400)
    ->setWidth(900)
    ->setSeries([['axis' => 'hours studied'], ['axis' => 'final grade']])
    ->setAxes(['y' => ['hours studied' =>
        ['label' => 'Hours Studied'], 'final grade' => ['label' => 'Final Exam Grade']]
    ]);
```

## Stepped Area Chart
```php
$sarea = new SteppedAreaChart();
$sarea->getData()->setArrayToDataTable(
    [
        ['Director (Year)',  'Rotten Tomatoes', 'IMDB'],
        ['Alfred Hitchcock (1935)', 8.4,         7.9],
        ['Ralph Thomas (1959)',     6.9,         6.5],
        ['Don Sharp (1978)',        6.5,         6.4],
        ['James Hawes (2008)',      4.4,         6.2]
    ]
);
$sarea->getOptions()->setTitle('The decline of \'The 39 Steps\'');
$sarea->getOptions()->getVAxis()->setTitle('Accumulated Rating');
$sarea->getOptions()->setIsStacked(true);
$sarea->getOptions()->setWidth(900);
```

## Table Chart
```php
$table = new TableChart();
$table->getData()->setArrayToDataTable(
    [
        [['label' => 'Name', 'type' => 'string'], ['label' => 'Salary', 'type' => 'number'],
            ['label' => 'Full Time Employee', 'type' => 'boolean']],
        ['Mike',  ['v' => 10000, 'f' => '$10,000'], true],
        ['Jim',   ['v' => 8000, 'f' => '$8,000'],  false],
        ['Alice', ['v' => 12500, 'f' => '$12,500'], true],
        ['Bob',   ['v' => 7000,  'f' => '$7,000'],  true]
    ]
);
$table->getOptions()->setShowRowNumber(true);
$table->getOptions()->setHeight('30%');
$table->getOptions()->setWidth('30%');
```

## Timeline
```php
$timeline = new Timeline();
$timeline->getData()->setArrayToDataTable(
    [
        [ 'Washington', 'George Washington', new DateTime('1789-03-30'), new DateTime('1797-02-04') ],
        [ 'Adams', 'John Adams', new DateTime('1797-02-04'), new DateTime('1801-02-04') ],
        [ 'Jefferson', 'Thomas Jefferson', new DateTime('1801-02-04'), new DateTime('1809-02-04') ]
    ],
    true
);
$timeline->getOptions()->getTimeline()->getRowLabelStyle()->setFontName('Helvetica');
$timeline->getOptions()->getTimeline()->getRowLabelStyle()->setFontSize(24);
$timeline->getOptions()->getTimeline()->getRowLabelStyle()->setColor('#603913');
$timeline->getOptions()->getTimeline()->getBarLabelStyle()->setFontName('Garamond');
$timeline->getOptions()->getTimeline()->getBarLabelStyle()->setFontSize(14);
$timeline->getOptions()->setColors(['#cbb69d', '#603913', '#c69c6e']);
```

## Tree Map Chart
```php
$treemap = new TreeMapChart();
$treemap->getData()->setArrayToDataTable(
    [
        ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
        ['Global',    null,                 0,                               0],
        ['America',   'Global',             0,                               0],
        ['Europe',    'Global',             0,                               0],
        ['Asia',      'Global',             0,                               0],
        ['Australia', 'Global',             0,                               0],
        ['Africa',    'Global',             0,                               0],
        ['Brazil',    'America',            11,                              10],
        ['USA',       'America',            52,                              31],
        ['Mexico',    'America',            24,                              12],
        ['Canada',    'America',            16,                              -23],
        ['France',    'Europe',             42,                              -11],
        ['Germany',   'Europe',             31,                              -2],
        ['Sweden',    'Europe',             22,                              -13],
        ['Italy',     'Europe',             17,                              4],
        ['UK',        'Europe',             21,                              -5],
        ['China',     'Asia',               36,                              4],
        ['Japan',     'Asia',               20,                              -12],
        ['India',     'Asia',               40,                              63],
        ['Laos',      'Asia',               4,                               34],
        ['Mongolia',  'Asia',               1,                               -5],
        ['Israel',    'Asia',               12,                              24],
        ['Iran',      'Asia',               18,                              13],
        ['Pakistan',  'Asia',               11,                              -52],
        ['Egypt',     'Africa',             21,                              0],
        ['S. Africa', 'Africa',             30,                              43],
        ['Sudan',     'Africa',             12,                              2],
        ['Congo',     'Africa',             10,                              12],
        ['Zaire',     'Africa',             8,                               10]
    ]
);
$treemap->getOptions()->setMinColor('#f00');
$treemap->getOptions()->setMidColor('#ddd');
$treemap->getOptions()->setMaxColor('#0d0');
$treemap->getOptions()->setHeaderHeight(15);
$treemap->getOptions()->setFontColor('black');
$treemap->getOptions()->setShowScale(true);
$treemap->getOptions()->setWidth(900);
$treemap->getOptions()->setHeight(500);
```

## Word Tree
```php
$wordTree = new WordTree();
$wordTree->getData()->setArrayToDataTable(
    [ ['Phrases'],
        ['cats are better than dogs'],
        ['cats eat kibble'],
        ['cats are better than hamsters'],
        ['cats are awesome'],
        ['cats are people too'],
        ['cats eat mice'],
        ['cats meowing'],
        ['cats in the cradle'],
        ['cats eat mice'],
        ['cats in the cradle lyrics'],
        ['cats eat kibble'],
        ['cats for adoption'],
        ['cats are family'],
        ['cats eat mice'],
        ['cats are better than kittens'],
        ['cats are evil'],
        ['cats are weird'],
        ['cats eat mice'],
    ]
);
$wordTree->getOptions()->getWordtree()->setFormat('implicit');
$wordTree->getOptions()->getWordtree()->setWord('cats');
$wordTree->getOptions()->setFontName('Times-Roman');
$wordTree->getOptions()->setWidth(900);
$wordTree->getOptions()->setHeight(500);
```
