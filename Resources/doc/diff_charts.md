# Diff Charts
Diff charts are available for bar charts, column charts, pie charts, and scatter charts. See [Google documentation](https://developers.google.com/chart/interactive/docs/gallery/diffchart).

Here you can find an example to create a diff column chart. First in your controller :
```php
public function indexAction()
{
    $oldColumnChart = new ColumnChart();
    $oldColumnChart->getData()->setArrayToDataTable(
        [
            ['Name', 'Popularity'],
            ['Cesar', 250],
            ['Rachel', 4200],
            ['Patrick', 2900],
            ['Eric', 8200]
        ]
    );
    $oldColumnChart->getOptions()->getLegend()->setPosition('top');
    $oldColumnChart->getOptions()->setWidth(450);
    $oldColumnChart->getOptions()->setHeight(250);
    
    $newColumnChart = new ColumnChart();
    $newColumnChart->getData()->setArrayToDataTable(
        [
            ['Name', 'Popularity'],
            ['Cesar', 370],
            ['Rachel', 600],
            ['Patrick', 700],
            ['Eric', 1500]
        ]
    );
    $newColumnChart->setOptions($oldColumnChart->getOptions());
    
    $diffColumnChart = new DiffColumnChart($oldColumnChart, $newColumnChart);
    $diffColumnChart->getOptions()->getLegend()->setPosition('top');
    $diffColumnChart->getOptions()->setWidth(450);
    $diffColumnChart->getOptions()->setHeight(250);
    $diffColumnChart->getOptions()->getDiff()->getNewData()->setWidthFactor(0.1);  
    
    return $this->render('AppBundle::diffcol.html.twig', array(
        'oldColumnChart' => $oldColumnChart,
        'newColumnChart' => $newColumnChart,
        'diffColumnChart' => $diffColumnChart
    ));
}
```

And in your template :
```twig
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="oldColumnChart"></div>
    <div id="newColumnChart"></div>
    <div id="diffColumnChart"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_draw([oldColumnChart, newColumnChart, diffColumnChart], ['oldColumnChart', 'newColumnChart', 'diffColumnChart']) }}
    </script>
</body>
</html>
```
