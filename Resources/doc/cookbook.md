# Cookbook
Here, you can find recipes to recreate charts demo in [Google documentation] (https://google-developers.appspot.com/chart/interactive/docs/gallery).

## Combo Chart
```
$combo = new ComboChart();
$combo->getData()->setArrayToTable([
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
$combo->getOptions()->setSeries([5 => ['type' => 'line']]);
$combo->getOptions()->setWidth(900);
$combo->getOptions()->setHeight(500);
```

## Candlestick Chart
```
$candle = new CandlestickChart();
$candle->getData()->setArrayToTable([
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
```
$gantt = new GanttChart();
$gantt->getData()->setArrayToTable([
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

## Line Chart
```
$line = new LineChart();
$line->getData()->setArrayToTable(
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

## Sankey Diagram
```
$sankey = new SankeyDiagram();
$sankey->getData()->setArrayToTable(
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
$sankey->getOptions()->getSankey()->getNode()->setColors(['#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f',
    '#cab2d6', '#ffff99', '#1f78b4', '#33a02c']);
$sankey->getOptions()->getSankey()->getLink()->setColors(['#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f',
    '#cab2d6', '#ffff99', '#1f78b4', '#33a02c']);
$sankey->getOptions()->getSankey()->getLink()->setColorMode('gradient');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setFontName('Times-Roman');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setFontSize(14);
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setColor('#871b47');
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setItalic(true);
$sankey->getOptions()->getSankey()->getNode()->getLabel()->setBold(true);
$sankey->getOptions()->getSankey()->getNode()->setNodePadding(60);
```

## Scatter Chart
```
$scatter = new ScatterChart();
$scatter->getData()->setArrayToTable([
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

## Stepped Area Chart
```
$sarea = new SteppedAreaChart();
$sarea->getData()->setArrayToTable(
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
```
$table = new TableChart();
$table->getData()->setArrayToTable(
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
```
$timeline = new Timeline();
$timeline->getData()->setArrayToTable(
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