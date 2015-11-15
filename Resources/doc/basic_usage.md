# Basic usage

## Case 1 : one chart
In your controller :
```
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

    return $this->render('AppBundle::index.html.twig', array('piechart' => $piechart);
}
```

And in your template :
```
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="div_chart"></div>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        {{ gc_draw(piechart, 'div_chart') }}
    </script>
</body>
</html>
```

## Case 2 : multiple charts
In your controller :
```
public function indexAction()
{
    $pieChart = new PieChart();
    $pieChart->setElementID('pieRotate');
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

    return $this->render('AppBundle::index.html.twig', array('piechart' => $piechart, 'histogram' => $histogram);
}
```

And in your template :
```
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="div_piechart"></div>
    <div id="div_histogram"></div>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        {{ gc_draw([piechart, histogram], ['div_piechart', 'div_histogram']) }}
    </script>
</body>
</html>
```

You can also use the Twig function `gc_draw` for each chart :
```
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="div_piechart"></div>
    <div id="div_histogram"></div>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        {{ gc_draw(piechart, 'div_piechart') }}
        {{ gc_draw(histogram, 'div_histogram') }}
    </script>
</body>
</html>
```