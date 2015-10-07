# CMENGoogleChartsBundle

/!\ This bundle is in development. Only some charts and options are available.

## Installation

### Step 1: Download CMENGoogleChartsBundle using composer
```
composer require cmen/google-charts "@dev"
```
Composer will install the bundle to your project's vendor directory.

### Step 2: Enable the bundle
Enable the bundle in the kernel:
```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new CMEN\GoogleChartsBundle\CMENGoogleChartsBundle(),
    );
}
```

### Step 3 (optional): Configure version of Google Charts
The latest version :
```
# app/config.yml
...
cmen_google_charts:
    version: "1"
```

The cutting edge developer version
```
# app/config.yml
...
cmen_google_charts:
    version: "1.1"
```

A frozen version :
```
# app/config.yml
...
cmen_google_charts:
    version: "41"
```

If you do not configure the bundle, the latest version is used.

## Usage

### Basic usage example
First, in your controller :
```
public function indexAction()
{
    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToTable(
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
<html>
    <head>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        {{ drawChart(piechart, 'div_chart') }}
    </head>
    <body>
        <div id="div_chart"></div>
    </body>
</html>
```

## Available chart types
- AnnotationsChart
- AreaChart
- BarChart
- BubbleChart
- CalendarChart
- ColumnChart
- ComboChart
- GaugeChart
- GeoChart
- Histogram
- LineChart
- PieChart