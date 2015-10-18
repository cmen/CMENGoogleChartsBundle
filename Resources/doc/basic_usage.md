# Basic usage
First, in your controller :
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
<div id="div_chart"></div>
        
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
{{ drawChart(piechart, 'div_chart') }}
```