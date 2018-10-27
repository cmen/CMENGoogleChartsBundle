# Basic usage

## Case 1 : one chart
In your controller :
```php
public function indexAction()
{
    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['Task', 'Hours per Day'],
         ['Work',     11],
         ['Eat',      2],
         ['Commute',  2],
         ['Watch TV', 2],
         ['Sleep',    7]
        ]
    );
    $pieChart->getOptions()->setTitle('My Daily Activities');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('AppBundle::index.html.twig', array('piechart' => $pieChart));
}
```

And in your template :
```twig
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="div_chart"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_draw(piechart, 'div_chart') }}
    </script>
</body>
</html>
```

## Case 2 : multiple charts
In your controller :
```php
public function indexAction()
{
    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [
            ['Language', 'Speakers (in millions)'],
            ['German',  5.85],
            ['French',  1.66],
            ['Italian', 0.316],
            ['Romansh', 0.0791]
        ]
    );
    $pieChart->getOptions()->setPieSliceText('label');
    $pieChart->getOptions()->setTitle('Swiss Language Use (100 degree rotation)');
    $pieChart->getOptions()->setPieStartAngle(100);
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getLegend()->setPosition('none');

    $histogram = new Histogram();
    $histogram->getData()->setArrayToDataTable([
        ['Population'],
        [12000000],
        [13000000],
        [100000000],
        [1000000000],
        [25000000],
        [600000],
        [6000000],
        [65000000],
        [210000000],
        [80000000],
    ]);
    $histogram->getOptions()->setTitle('Country Populations');
    $histogram->getOptions()->setWidth(900);
    $histogram->getOptions()->setHeight(500);
    $histogram->getOptions()->getLegend()->setPosition('none');
    $histogram->getOptions()->setColors(['#e7711c']);
    $histogram->getOptions()->getHistogram()->setLastBucketPercentile(10);
    $histogram->getOptions()->getHistogram()->setBucketSize(10000000);

    return $this->render('AppBundle::index.html.twig', array('piechart' => $piechart, 'histogram' => $histogram));
}
```

And in your template :
```twig
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="div_piechart"></div>
    <div id="div_histogram"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_draw([piechart, histogram], ['div_piechart', 'div_histogram']) }}
    </script>
</body>
</html>
```

## Fluent setters
Instead of this :
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

You can use fluent setters to have less code to write :
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
$col->getOptions()
    ->setTitle('Motivation and Energy Level Throughout the Day')
    ->setWidth(900)
    ->setHeight(500);
$col->getOptions()
    ->getAnnotations()
        ->setAlwaysOutside(true)
        ->getTextStyle()
            ->setAuraColor('none')
            ->setFontSize(14)
            ->setColor('#000');
$col->getOptions()
    ->getHAxis()
        ->setFormat('h:mm a')
        ->setTitle('Time of Day')
        ->getViewWindow()
            ->setMin([7, 30, 0])
            ->setMax([17, 30, 0]);
$col->getOptions()
    ->getVAxis()
        ->setTitle('Rating (scale of 1-10)');
```
