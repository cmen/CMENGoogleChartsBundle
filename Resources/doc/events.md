# Events

## Event Handling Example 
The [following example ](https://developers.google.com/chart/interactive/docs/events#event-handling-example) demonstrates both getSelection() and setSelection(). It synchronizes the selection between two charts that use the same data table. Click on either chart to synchronize the selection in the other chart.

In your controller :
```php
public function eventAction()
{
    $data =  [
        ['Name', 'Manager'],
        ['Mary', null],
        ['John', 'Mary'],
        ['Steve', 'Mary'],
        ['Ellen', 'Steve'],
        ['Robert', 'Steve'],
    ];

    $table = new TableChart();
    $table->getData()->setArrayToDataTable($data);

    $org = new OrgChart();
    $org->getData()->setArrayToDataTable($data);

    return $this->render('AppBundle::event.html.twig', array(
        'table' => $table,
        'org' => $org,
    ));
}
```

In your template, you must use the Twig functions `gc_start`, `gc_end` and `gc_event` to add an event to a chart :
```twig
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="table"></div>
    <div id="org"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_start([table, org], ['table', 'org']) }}
    
        {{ gc_event(table, 'select', 'selectOrg') }}
        function selectOrg () {
            {{ org.name }}.setSelection({{ table.name }}.getSelection());
        }
    
        {{ gc_event(org, 'select', 'selectTable') }}
        function selectTable () {
            {{ table.name }}.setSelection({{ org.name }}.getSelection());
        }
    
        {{ gc_end([table, org]) }}
    </script>
</body>
</html>
```

## Printing PNG charts
The following example can be found [here in Google documentation](https://developers.google.com/chart/interactive/docs/printing#overview).

In your controller :
```php
public function event2Action()
{
    $chart = new ColumnChart();
    $chart->getData()->setArrayToDataTable(
        [
            ['Element', 'Density', [ 'role' => 'style' ]],
            ['Copper', 8.94, '#b87333', ],
            ['Silver', 10.49, 'silver'],
            ['Gold', 19.30, 'gold'],
            ['Platinum', 21.45, 'color: #e5e4e2' ]
        ]
    );

    return $this->render('AppBundle::event2.html.twig', array('chart' => $chart));
}
```

In your template :
```twig
<!-- index.html.twig -->
<html>
<head></head>
<body>
    <div id="chart"></div>
    <div id='png'></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{ gc_start(chart, 'chart') }}
        
        {{ gc_event(chart, 'ready', 'printPng') }}
    
        function printPng() {
            document.getElementById('png').outerHTML = '<a href="' + {{ chart.name }}.getImageURI() + '">Printable version</a>';
        }
    
        {{ gc_end(chart) }}
    </script>
</body>
</html>
```
