<?php

namespace CMENGoogleChartsBundle\Controller;

use CMENGoogleChartsBundle\GoogleCharts\AnnotationChart;
use CMENGoogleChartsBundle\GoogleCharts\AreaChart;
use CMENGoogleChartsBundle\GoogleCharts\BarChart;
use CMENGoogleChartsBundle\GoogleCharts\BubbleChart;
use CMENGoogleChartsBundle\GoogleCharts\CalendarChart;
use CMENGoogleChartsBundle\GoogleCharts\ColumnChart;
use CMENGoogleChartsBundle\GoogleCharts\GaugeChart;
use CMENGoogleChartsBundle\GoogleCharts\GeoChart;
use CMENGoogleChartsBundle\GoogleCharts\Histogram;
use CMENGoogleChartsBundle\GoogleCharts\LineChart;
use CMENGoogleChartsBundle\GoogleCharts\MaterialLineChart;
use CMENGoogleChartsBundle\GoogleCharts\PieChart;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/col", name="col")
     */
    public function colAction()
    {
        $col = new ColumnChart();
        $col->getData()->addColumn('timeofday', 'Time of Day');
        $col->getData()->addColumn('number', 'Motivation Level');
        $col->getData()->addColumn('string', ['role' => 'annotation']);
        $col->getData()->addColumn('number', 'Energy Level');
        $col->getData()->addColumn('string', 'Energy Level');
        $col->getData()->setArrayToTable(
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

        return $this->render(
            'CMENGoogleChartsBundle::col.html.twig',
            array(
                'col' => $col,
            )
        );
    }

    /**
     * @Route("/cal", name="cal")
     */
    public function calAction()
    {
        $cal = new CalendarChart();
        $cal->getData()->addColumn('date', 'Date');
        $cal->getData()->addColumn('number', 'Won/Loss');
        $cal->getData()->addRows([
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
        ]);
        $cal->getOptions()->setTitle('Red Sox Attendance');
        $cal->getOptions()->setHeight(350);
        $cal->getOptions()->setWidth(1000);
        $cal->getOptions()->getCalendar()->setCellSize(20);
        //$cal->getOptions()->getNoDataPattern()->setBackgroundColor('#76a7fa');
        //$cal->getOptions()->getNoDataPattern()->setColor('#a0c3ff');
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

        return $this->render(
            'CMENGoogleChartsBundle::cal.html.twig',
            array(
                'cal' => $cal,
            )
        );
    }

    /**
     * @Route("/bubble", name="bubble")
     */
    public function bubbleAction()
    {
        $bubble = new BubbleChart();
        $bubble->getData()->setArrayToTable([
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

        $bubble2 = new BubbleChart();
        $bubble2->getData()->setArrayToTable([
            ['ID', 'X', 'Y', 'Temperature'],
            ['',   80,  167,      120],
            ['',   79,  136,      130],
            ['',   78,  184,      50],
            ['',   72,  278,      230],
            ['',   81,  200,      210],
            ['',   72,  170,      100],
            ['',   68,  477,      80]
        ]);
        $bubble2->getOptions()->getColorAxis()->setColors(['yellow', 'red']);
        $bubble2->getOptions()->setWidth(900);
        $bubble2->getOptions()->setHeight(500);

        return $this->render(
            'CMENGoogleChartsBundle::bubble.html.twig',
            array(
                'bubble' => $bubble,
                'bubble2' => $bubble2,
            )
        );
    }

    /**
     * @Route("/bar", name="bar")
     */
    public function barAction()
    {
        $bar = new BarChart();
        $bar->getData()->setArrayToTable([
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
        $bar->getOptions()->setBars('horizontal');
        $bar->getOptions()->setWidth(900);
        $bar->getOptions()->setHeight(500);

        $bar2 = new BarChart();
        $bar2->getData()->setArrayToTable([
            ['Element', 'Density', ['role' => 'style'], ['role' => 'annotation']],
            ['Copper', 8.94, '#b87333', 'Cu'],
            ['Silver', 10.49, 'silver', 'Ag'],
            ['Gold', 19.30, 'gold', 'Au'],
            ['Platinum', 21.45, 'color: #e5e4e2', 'Pt']
        ]);
        $bar2->getOptions()->setWidth(900);
        $bar2->getOptions()->setHeight(500);

        $bar3 = new BarChart();
        $bar3->getData()->setArrayToTable([
            ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
                'Western', 'Literature', ['role' => 'annotation']],
            ['2010', 10, 24, 20, 32, 18, 5, ''],
            ['2020', 16, 22, 23, 30, 16, 9, ''],
            ['2030', 28, 19, 29, 30, 12, 13, '']
        ]);
        $bar3->getOptions()->setWidth(600);
        $bar3->getOptions()->setHeight(400);
        $bar3->getOptions()->getLegend()->setPosition('top');
        $bar3->getOptions()->getLegend()->setMaxLines(3);
        //$bar3->getOptions()->getBar()->setGroupWidth('75%');
        $bar3->getOptions()->setIsStacked('percent');
        $bar3->getOptions()->getHAxis()->setTicks([0, 0.3, 0.6, 0.9, 1]);
        $bar3->getOptions()->getHAxis()->setMinValue(0);


        return $this->render(
            'CMENGoogleChartsBundle::bar.html.twig',
            array(
                'bar' => $bar,
                'bar2' => $bar2,
                'bar3' => $bar3,
            )
        );
    }

    /**
     * @Route("/anno", name="anno")
     */
    public function annoAction()
    {
        $anno = new AnnotationChart();
        $anno->setElementID('anno');
        $anno->getData()->addColumn('date', 'Date');
        $anno->getData()->addColumn('number', 'Kepler-22b mission');
        $anno->getData()->addColumn('string', 'Kepler title');
        $anno->getData()->addColumn('string', 'Kepler text');
        $anno->getData()->addColumn('number', 'Gliese 163 mission');
        $anno->getData()->addColumn('string', 'Gliese title');
        $anno->getData()->addColumn('string', 'Gliese text');
        $anno->getData()->addRows([
            [new DateTime('2314-02-15'), 12400, 'undefined', 'undefined',
                10645, 'undefined', 'undefined'],
            [new DateTime('2314-02-16'), 24045, 'Lalibertines', 'First encounter',
                12374, 'undefined', 'undefined'],
            [new DateTime('2314-02-17'), 35022, 'Lalibertines', 'They are very tall',
                15766, 'Gallantors', 'First Encounter'],
            [new DateTime('2314-02-18'), 12284, 'Lalibertines', 'Attack on our crew!',
                34334, 'Gallantors', 'Statement of shared principles'],
            [new DateTime('2314-02-19'), 8476, 'Lalibertines', 'Heavy casualties',
                66467, 'Gallantors', 'Mysteries revealed'],
            [new DateTime('2314-02-20'), 0, 'Lalibertines', 'All crew lost',
                79463, 'Gallantors', 'Omniscience achieved']
        ]);
        $anno->getOptions()->setDisplayAnnotations(true);

        return $this->render(
            'CMENGoogleChartsBundle::anno.html.twig',
            array(
                'anno' => $anno,
            )
        );
    }

    /**
     * @Route("/geo", name="geo")
     */
    public function geoAction()
    {
        $geo = new GeoChart();
        $geo->setElementID('geo');
        $geo->getData()->setArrayToTable(
            [['Country', 'Popularity'],
                ['Germany', 200],
                ['United States', 300],
                ['Brazil', 400],
                ['Canada', 500],
                ['France', 600],
                ['RU', 700]
            ]
        );
        $geo->getOptions()->setWidth(900);
        $geo->getOptions()->setHeight(500);

        $geo2 = new GeoChart();
        $geo2->setElementID('geo2');
        $geo2->getData()->setArrayToTable(
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
        $geo2->getOptions()->setRegion('IT');
        $geo2->getOptions()->setDisplayMode('markers');
        $geo2->getOptions()->getColorAxis()->setColors(['green', 'blue']);
        $geo2->getOptions()->setWidth(900);
        $geo2->getOptions()->setHeight(500);

        $geo3 = new GeoChart();
        $geo3->setElementID('geo3');
        $geo3->getData()->setArrayToTable([
            ['Country',   'Population', 'Area Percentage'],
            ['France',  65700000, 50],
            ['Germany', 81890000, 27],
            ['Poland',  38540000, 23]
        ]);
        $geo3->getOptions()->getSizeAxis()->setMinValue(0);
        $geo3->getOptions()->getSizeAxis()->setMaxValue(100);
        $geo3->getOptions()->setRegion('155');
        $geo3->getOptions()->setDisplayMode('markers');
        $geo3->getOptions()->getColorAxis()->setColors(['#e7711c', '#4374e0']);
        $geo3->getOptions()->setWidth(900);
        $geo3->getOptions()->setHeight(500);

        $geo4 = new GeoChart();
        $geo4->setElementID('geo4');
        $geo4->getData()->setArrayToTable([
            ['Country', 'Popularity'],
            ['South America', 600],
            ['Canada', 500],
            ['France', 600],
            ['Russia', 700],
            ['Australia', 600]
        ]);
        $geo4->getOptions()->setDisplayMode('text');
        $geo4->getOptions()->setWidth(900);
        $geo4->getOptions()->setHeight(500);


        $geo5 = new GeoChart();
        $geo5->setElementID('geo5');
        $geo5->getData()->setArrayToTable([
            ['Country',   'Latitude'],
            ['Algeria', 36], ['Angola', -8], ['Benin', 6], ['Botswana', -24],
            ['Burkina Faso', 12], ['Burundi', -3], ['Cameroon', 3],
            ['Canary Islands', 28], ['Cape Verde', 15],
            ['Central African Republic', 4], ['Ceuta', 35], ['Chad', 12],
            ['Comoros', -12], ['Cote d\'Ivoire', 6],
            ['Democratic Republic of the Congo', -3], ['Djibouti', 12],
            ['Egypt', 26], ['Equatorial Guinea', 3], ['Eritrea', 15],
            ['Ethiopia', 9], ['Gabon', 0], ['Gambia', 13], ['Ghana', 5],
            ['Guinea', 10], ['Guinea-Bissau', 12], ['Kenya', -1],
            ['Lesotho', -29], ['Liberia', 6], ['Libya', 32], ['Madagascar', null],
            ['Madeira', 33], ['Malawi', -14], ['Mali', 12], ['Mauritania', 18],
            ['Mauritius', -20], ['Mayotte', -13], ['Melilla', 35],
            ['Morocco', 32], ['Mozambique', -25], ['Namibia', -22],
            ['Niger', 14], ['Nigeria', 8], ['Republic of the Congo', -1],
            ['Réunion', -21], ['Rwanda', -2], ['Saint Helena', -16],
            ['São Tomé and Principe', 0], ['Senegal', 15],
            ['Seychelles', -5], ['Sierra Leone', 8], ['Somalia', 2],
            ['Sudan', 15], ['South Africa', -30], ['South Sudan', 5],
            ['Swaziland', -26], ['Tanzania', -6], ['Togo', 6], ['Tunisia', 34],
            ['Uganda', 1], ['Western Sahara', 25], ['Zambia', -15],
            ['Zimbabwe', -18]
        ]);
        $geo5->getOptions()->setRegion('002');
        $geo5->getOptions()->getColorAxis()->setColors(['#00853f', 'black', '#e31b23']);
        $geo5->getOptions()->setBackgroundColor('#81d4fa');
        $geo5->getOptions()->setDatalessRegionColor('#f8bbd0');
        $geo5->getOptions()->setDefaultColor('#f5f5f5');
        $geo5->getOptions()->setWidth(900);
        $geo5->getOptions()->setHeight(500);

        return $this->render(
            'CMENGoogleChartsBundle::geo.html.twig',
            array(
                'geo' => $geo,
                'geo2' => $geo2,
                'geo3' => $geo3,
                'geo4' => $geo4,
                'geo5' => $geo5,
            )
        );
    }

    /**
     * @Route("/area", name="area")
     */
    public function areaAction()
    {
        $area = new AreaChart();
        $area->setElementID('area');
        $area->getData()->setArrayToTable([
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

        $area2 = new AreaChart();
        $area2->setElementID('area2');
        $area2->getData()->setArrayToTable([
            ['Year', 'Cars', 'Trucks', 'Drones', 'Segways'],
            ['2013', 870, 460, 10, 120],
            ['2014', 460, 720, 20, 60],
            ['2015', 930, 540, 40, 30],
            ['2016', 1000, 400, 80, 15]
        ]);
        $area2->getOptions()->setIsStacked('relative');
        $area2->getOptions()->setHeight(300);
        $area2->getOptions()->getLegend()->setPosition('top');
        $area2->getOptions()->getLegend()->setMaxLines(3);
        $area2->getOptions()->getVAxis()->setMinValue(0);
        $area2->getOptions()->getVAxis()->setTicks([0, 0.3, 0.6, 0.9, 1]);
        $area2->getOptions()->setHeight(300);
        $area2->getOptions()->setWidth(400);

        $area3 = new AreaChart();
        $area3->setElementID('area3');
        $area3->getData()->setArrayToTable([
            ['Year', 'Cars', 'Trucks', 'Drones', 'Segways'],
            ['2013', 870, 460, 10, 120],
            ['2014', 460, 720, 20, 60],
            ['2015', 930, 540, 40, 30],
            ['2016', 1000, 400, 80, 15]
            ]);
        $area3->getOptions()->setIsStacked(true);
        $area3->getOptions()->setHeight(300);
        $area3->getOptions()->getLegend()->setPosition('top');
        $area3->getOptions()->getLegend()->setMaxLines(3);
        $area3->getOptions()->getVAxis()->setMinValue(0);
        $area3->getOptions()->setHeight(300);
        $area3->getOptions()->setWidth(400);

        $area4 = new AreaChart();
        $area4->setElementID('area4');
        $area4->getData()->setArrayToTable([
            ['Year', 'Cars', 'Trucks', 'Drones', 'Segways'],
            ['2013', 870, 460, 0, 120],
            ['2014', 460, 720, 0, 60],
            ['2015', 930, 540, 40, 30],
            ['2016', 1000, 400, 80, 15]
        ]);
        $area4->getOptions()->setHeight(300);
        $area4->getOptions()->getLegend()->setPosition('top');
        $area4->getOptions()->getLegend()->setMaxLines(3);
        $area4->getOptions()->getVAxis()->setMinValue(0);
        $area4->getOptions()->setHeight(300);
        $area4->getOptions()->setWidth(400);

        return $this->render(
            'CMENGoogleChartsBundle::area.html.twig',
            array(
                'area' => $area,
                'area2' => $area2,
                'area3' => $area3,
                'area4' => $area4,
            )
        );
    }

    /**
     * @Route("/histo", name="histogram")
     */
    public function histoAction()
    {
        $histo = new Histogram();
        $histo->setElementID('histo');
        $histo->getData()->setArrayToTable([
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

        $histo2 = new Histogram();
        $histo2->setElementID('histo2');
        $histo2->getData()->setArrayToTable([
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
        $histo2->getOptions()->setTitle('Country Populations');
        $histo2->getOptions()->setWidth(900);
        $histo2->getOptions()->setHeight(500);
        $histo2->getOptions()->getLegend()->setPosition('none');
        $histo2->getOptions()->setColors(['#e7711c']);
        $histo2->getOptions()->getHistogram()->setLastBucketPercentile(10);
        $histo2->getOptions()->getHistogram()->setBucketSize(10000000);

        $histo3 = new Histogram();
        $histo3->setElementID('histo3');
        $histo3->getData()->setArrayToTable(
            [
                ['Quarks', 'Leptons', 'Gauge Bosons', 'Scalar Bosons'],
                [2/3, -1, 0, 0],
                [2/3, -1, 0, null],
                [2/3, -1, 0, null],
                [-1/3, 0, 1, null],
                [-1/3, 0, -1, null],
                [-1/3, 0, null, null],
                [-1/3, 0, null, null]
            ]
        );
        $histo3->getOptions()->setTitle('Charges of subatomic particles');
        $histo3->getOptions()->getLegend()->setPosition('top');
        $histo3->getOptions()->getLegend()->setMaxLines(2);
        $histo3->getOptions()->setColors(['#5C3292', '#1A8763', '#871B47', '#999999']);
        $histo3->getOptions()->setInterpolateNulls(false);
        $histo3->getOptions()->getAnimation()->setStartup(true);
        $histo3->getOptions()->getAnimation()->setEasing('linear');
        $histo3->getOptions()->setAxisTitlesPosition('out');
        $histo3->getOptions()->setWidth(700);
        $histo3->getOptions()->setHeight(500);
        $histo3->getOptions()->getBar()->setGroupWidth(100);
        $histo3->getOptions()->getHAxis()->getGridlines()->setColor('#ff0000');
        $histo3->getOptions()->getVAxis()->getGridlines()->setColor('#00ff00');

        return $this->render(
            'CMENGoogleChartsBundle::histo.html.twig',
            array(
                'histo' => $histo,
                'histo2' => $histo2,
                'histo3' => $histo3,
            )
        );
    }

    /**
     * @Route("/gauge", name="gauge")
     */
    public function gaugeAction()
    {
        $gauge = new GaugeChart();
        $gauge->setElementID('gauge');
        $gauge->getData()->setArrayToTable([
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

        return $this->render(
            'CMENGoogleChartsBundle::gauge.html.twig',
            array(
                'gauge' => $gauge,
            )
        );
    }

    /**
     * @Route("/line", name="line")
     */
    public function lineAction()
    {
        $line = new LineChart();
        $line->setElementID('line');
        $line->getData()->addColumn('number', 'X');
        $line->getData()->addColumn('number', 'Dogs');
        $line->getData()->addColumn('number', 'Cats');
        $line->getData()->addRows([
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
            [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72]
        ]);
        $line->getOptions()->getHAxis()->setTitle('Time');
        $line->getOptions()->getHAxis()->getTextStyle()->setColor('#01579b');
        $line->getOptions()->getHAxis()->getTextStyle()->setFontSize(20);
        $line->getOptions()->getHAxis()->getTextStyle()->setFontName('Arial');
        $line->getOptions()->getHAxis()->getTextStyle()->setBold(true);
        $line->getOptions()->getHAxis()->getTextStyle()->setItalic(true);
        $line->getOptions()->getHAxis()->getTitleTextStyle()->setColor('#01579b');
        $line->getOptions()->getHAxis()->getTitleTextStyle()->setFontSize(16);
        $line->getOptions()->getHAxis()->getTitleTextStyle()->setFontName('Arial');
        $line->getOptions()->getHAxis()->getTitleTextStyle()->setBold(false);
        $line->getOptions()->getHAxis()->getTitleTextStyle()->setItalic(true);
        $line->getOptions()->getVAxis()->setTitle('Popularity');
        $line->getOptions()->getVAxis()->getTextStyle()->setColor('#1a237e');
        $line->getOptions()->getVAxis()->getTextStyle()->setFontSize(24);
        $line->getOptions()->getVAxis()->getTextStyle()->setBold(true);
        $line->getOptions()->getVAxis()->getTitleTextStyle()->setColor('#1a237e');
        $line->getOptions()->getVAxis()->getTitleTextStyle()->setFontSize(24);
        $line->getOptions()->getVAxis()->getTitleTextStyle()->setBold(true);
        $line->getOptions()->setColors(['#a52714', '#097138']);


        $line2 = new LineChart();
        $line2->setElementID('line2');
        $line2->getData()->setArrayToTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120],
            ['2007',  1030,      540]
        ]);
        $line2->getOptions()->setTitle('Company Performance');
        $line2->getOptions()->setCurveType('function');
        $line2->getOptions()->getLegend()->setPosition('none');


        $line3 = new MaterialLineChart();
        $line3->setElementID('line3');
        $line3->getData()->addColumn('number', 'Day');
        $line3->getData()->addColumn('number', 'Guardians of the Galaxy');
        $line3->getData()->addColumn('number', 'The Avengers');
        $line3->getData()->addColumn('number', 'Transformers: Age of Extinction');
        $line3->getData()->addRows([
            [1,  37.8, 80.8, 41.8],
            [2,  30.9, 69.5, 32.4],
            [3,  25.4,   57, 25.7],
            [4,  11.7, 18.8, 10.5],
            [5,  11.9, 17.6, 10.4],
            [6,   8.8, 13.6,  7.7],
            [7,   7.6, 12.3,  9.6],
            [8,  12.3, 29.2, 10.6],
            [9,  16.9, 42.9, 14.8],
            [10, 12.8, 30.9, 11.6],
            [11,  5.3,  7.9,  4.7],
            [12,  6.6,  8.4,  5.2],
            [13,  4.8,  6.3,  3.6],
            [14,  4.2,  6.2,  3.4]
        ]);
        $line3->getOptions()->getChart()->setTitle('Box Office Earnings in First Two Weeks of Opening');
        $line3->getOptions()->getChart()->setSubtitle('in millions of dollars (USD)');
        $line3->getOptions()->setWidth(900);
        $line3->getOptions()->setHeight(500);

        $line4 = new LineChart();
        $line4->setElementID('line4');
        $line4->getData()->addColumn('string', 'Month');
        $line4->getData()->addColumn('number', "Average Temperature");
        $line4->getData()->addColumn('number', "Average Hours of Daylight");
        $line4->getData()->addRows([
            ['2014-01',  -.5,  5.7],
            ['2014-02',   .4,  8.7],
            ['2014-03',   .5,   12],
            ['2014-04',  2.9, 15.3],
            ['2014-05',  6.3, 18.6],
            ['2014-06',    9, 20.9],
            ['2014-07', 10.6, 19.8],
            ['2014-08', 10.3, 16.6],
            ['2014-09',  7.4, 13.3],
            ['2014-10',  4.4,  9.9],
            ['2014-11', 1.1,  6.6],
            ['2014-12', -.2,  4.5]
        ]);
        $line4->getOptions()->setTitle('Average Temperatures and Daylight in Iceland Throughout the Year');
        $line4->getOptions()->setWidth(900);
        $line4->getOptions()->setHeight(500);
        $line4->getOptions()->setSeries([0 => ['targetAxisIndex' => 0], 1 => ['targetAxisIndex' => 1]]);
        $line4->getOptions()->setVAxes([0 => ['title' => 'Temps (Celsius)'], 1 => ['title' => 'Daylight']]);
        $line4->getOptions()->getHAxis()->setTicks(['2014-01', '2014-02', '2014-03', '2014-04', '2014-05', '2014-06',
            '2014-07', '2014-08', '2014-09', '2014-10', '2014-11', '2014-12']);
        $line4->getOptions()->getVAxis()->getViewWindow()->setMax(30);

        $line5 = new MaterialLineChart();
        $line5->setElementID('line5');
        $line5->getData()->addColumn('number', 'Day');
        $line5->getData()->addColumn('number', 'Guardians of the Galaxy');
        $line5->getData()->addColumn('number', 'The Avengers');
        $line5->getData()->addColumn('number', 'Transformers: Age of Extinction');
        $line5->getData()->addRows([
            [1,  37.8, 80.8, 41.8],
            [2,  30.9, 69.5, 32.4],
            [3,  25.4,   57, 25.7],
            [4,  11.7, 18.8, 10.5],
            [5,  11.9, 17.6, 10.4],
            [6,   8.8, 13.6,  7.7],
            [7,   7.6, 12.3,  9.6],
            [8,  12.3, 29.2, 10.6],
            [9,  16.9, 42.9, 14.8],
            [10, 12.8, 30.9, 11.6],
            [11,  5.3,  7.9,  4.7],
            [12,  6.6,  8.4,  5.2],
            [13,  4.8,  6.3,  3.6],
            [14,  4.2,  6.2,  3.4]
        ]);
        $line5->getOptions()->getChart()->setTitle('Box Office Earnings in First Two Weeks of Opening');
        $line5->getOptions()->getChart()->setSubtitle('in millions of dollars (USD)');
        $line5->getOptions()->setWidth(900);
        $line5->getOptions()->setHeight(500);
        $line5->getOptions()->getAxes()->setX([0 => ['side' => 'top']]);

        return $this->render(
            'CMENGoogleChartsBundle::line.html.twig',
            array(
                'line' => $line,
                'line2' => $line2,
                'line3' => $line3,
                'line4' => $line4,
                'line5' => $line5,
            )
        );
    }

    /**
     * @Route("/piechart", name="piechart")
     */
    public function pieChartAction()
    {
        $piechart = new PieChart();
        $piechart->setElementID('piechart');
        $piechart->getData()->addColumn('string', 'Topping');
        $piechart->getData()->addColumn('number', 'Slices');
        $piechart->getData()->addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
        ]);
        $piechart->getOptions()->setHeight(300);
        $piechart->getOptions()->setWidth(400);
        $piechart->getOptions()->setTitle('How Much Pizza I Ate Last Night');

        $piechartArrayTable = new PieChart();
        $piechartArrayTable->setElementID('piechartArrayTable');
        $piechartArrayTable->getData()->setArrayToTable(
            [['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]]
        );
        $piechartArrayTable->getOptions()->setTitle('My Daily Activities');
        $piechartArrayTable->getOptions()->setHeight(500);
        $piechartArrayTable->getOptions()->setWidth(900);
        $piechartArrayTable->getOptions()->getTitleTextStyle()->setBold(true);
        $piechartArrayTable->getOptions()->getTitleTextStyle()->setColor('#009900');
        $piechartArrayTable->getOptions()->getTitleTextStyle()->setItalic(true);
        $piechartArrayTable->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $piechartArrayTable->getOptions()->getTitleTextStyle()->setFontSize(20);


        $piechart3D = new PieChart();
        $piechart3D->setElementID('piechart3D');
        $piechart3D->getData()->setArrayToTable(
            [['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]]
        );
        $piechart3D->getOptions()->setTitle('My Daily Activities');
        $piechart3D->getOptions()->setIs3D(true);
        $piechart3D->getOptions()->setHeight(500);
        $piechart3D->getOptions()->setWidth(900);

        $pieDonut = new PieChart();
        $pieDonut->setElementID('pieDonut');
        $pieDonut->getData()->setArrayToTable(
            [['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]]
        );
        $pieDonut->getOptions()->setTitle('My Daily Activities');
        $pieDonut->getOptions()->setPieHole(0.4);
        $pieDonut->getOptions()->setHeight(500);
        $pieDonut->getOptions()->setWidth(900);
        $pieDonut->getOptions()->setColors(['red', '#004411', 'green', '#cccccc', 'yellow']);

        $pieDonut2 = new PieChart();
        $pieDonut2->setElementID('pieDonut2');
        $pieDonut2->getData()->setArrayToTable(
            [['Effort', 'Amount given'],
                ['My all', 100],
            ]
        );
        $pieDonut2->getOptions()->setPieHole(0.5);
        $pieDonut2->getOptions()->getPieSliceTextStyle()->setColor('black');
        $pieDonut2->getOptions()->getLegend()->setPosition('none');
        $pieDonut2->getOptions()->setHeight(500);
        $pieDonut2->getOptions()->setWidth(900);

        $pieRotate = new PieChart();
        $pieRotate->setElementID('pieRotate');
        $pieRotate->getData()->setArrayToTable(
            [
                ['Language', 'Speakers (in millions)'],
                ['German',  5.85],
                ['French',  1.66],
                ['Italian', 0.316],
                ['Romansh', 0.0791]
            ]
        );
        $pieRotate->getOptions()->setPieSliceText('label');
        $pieRotate->getOptions()->setTitle('Swiss Language Use (100 degree rotation)');
        $pieRotate->getOptions()->setPieStartAngle(100);
        $pieRotate->getOptions()->setHeight(500);
        $pieRotate->getOptions()->setWidth(900);
        $pieRotate->getOptions()->getLegend()->setPosition('none');

        $pieSlices = new PieChart();
        $pieSlices->setElementID('pieSlices');
        $pieSlices->getData()->setArrayToTable(
            [['Language', 'Speakers (in millions)'],
                ['Assamese', 13], ['Bengali', 83], ['Bodo', 1.4],
                ['Dogri', 2.3], ['Gujarati', 46], ['Hindi', 300],
                ['Kannada', 38], ['Kashmiri', 5.5], ['Konkani', 5],
                ['Maithili', 20], ['Malayalam', 33], ['Manipuri', 1.5],
                ['Marathi', 72], ['Nepali', 2.9], ['Oriya', 33],
                ['Punjabi', 29], ['Sanskrit', 0.01], ['Santhali', 6.5],
                ['Sindhi', 2.5], ['Tamil', 61], ['Telugu', 74], ['Urdu', 52]]
        );
        $pieSlices->getOptions()->setSlices(
            [4 => ['offset' => 0.2], 12 => ['offset' => 0.3], 14 => ['offset' => 0.4], 15 => ['offset' => 0.2]]
        );
        $pieSlices->getOptions()->setTitle('Indian Language Use');
        $pieSlices->getOptions()->setPieSliceText('label');
        $pieSlices->getOptions()->setHeight(500);
        $pieSlices->getOptions()->setWidth(900);
        $pieSlices->getOptions()->getLegend()->setPosition('none');

        $pacman = new PieChart();
        $pacman->setElementID('pacman');
        $pacman->getData()->setArrayToTable(
            [
                ['Pac Man', 'Percentage'],
                ['', 75],
                ['', 25]
            ]
        );
        $pacman->getOptions()->getLegend()->setPosition('none');
        $pacman->getOptions()->setPieSliceText('none');
        $pacman->getOptions()->setPieStartAngle(135);
        $pacman->getOptions()->setSlices([0 => ['color' => 'yellow'], 1 => ['color' => 'transparent']]);
        $pacman->getOptions()->setHeight(500);
        $pacman->getOptions()->setWidth(900);
        $pacman->getOptions()->getTooltip()->setTrigger('none');

        $pieTreshold = new PieChart();
        $pieTreshold->setElementID('pieTreshold');
        $pieTreshold->getData()->addColumn('string', 'Pizza');
        $pieTreshold->getData()->addColumn('number', 'Populartiy');
        $pieTreshold->getData()->addRows([
            ['Pepperoni', 33],
            ['Hawaiian', 26],
            ['Mushroom', 22],
            ['Sausage', 10], // Below limit.
            ['Anchovies', 9] // Below limit.
        ]);
        $pieTreshold->getOptions()->setTitle('Popularity of Types of Pizza');
        $pieTreshold->getOptions()->setSliceVisibilityThreshold(.2);
        $pieTreshold->getOptions()->setHeight(500);
        $pieTreshold->getOptions()->setWidth(900);
        $pieTreshold->getOptions()->setBackgroundColor('#cc0000');

        $pieAllIn = new PieChart();
        $pieAllIn->setElementID('pieAllIn');
        $pieAllIn->getData()->addColumn('string', 'Pizza');
        $pieAllIn->getData()->addColumn('number', 'Populartiy');
        $pieAllIn->getData()->addRows([
            ['Pepperoni', 33],
            ['Hawaiian', 26],
            ['Mushroom', 22],
            ['Sausage', 10],
            ['Anchovies', 9]
        ]);
        $pieAllIn->getOptions()->setTitle('Popularity of Types of Pizza');
        $pieAllIn->getOptions()->setHeight(500);
        $pieAllIn->getOptions()->setWidth(900);
        $pieAllIn->getOptions()->getBackgroundColor()->setFill('green');
        $pieAllIn->getOptions()->getBackgroundColor()->setStroke('blue');
        $pieAllIn->getOptions()->getBackgroundColor()->setStrokeWidth(10);
        $pieAllIn->getOptions()->getChartArea()->setLeft(10);
        $pieAllIn->getOptions()->getChartArea()->setTop('30%');
        $pieAllIn->getOptions()->getChartArea()->getBackgroundColor()->setStroke('red');
        $pieAllIn->getOptions()->getChartArea()->getBackgroundColor()->setStrokeWidth(50);

        return $this->render(
            'CMENGoogleChartsBundle::piechart.html.twig',
            array(
                'piechart' => $piechart,
                'piechartArrayTable' => $piechartArrayTable,
                'piechart3D' => $piechart3D,
                'pieDonut' => $pieDonut,
                'pieDonut2' => $pieDonut2,
                'pieRotate' => $pieRotate,
                'pieSlices' => $pieSlices,
                'pacman' => $pacman,
                'pieTreshold' => $pieTreshold,
                'pieAllIn' => $pieAllIn,
            )
        );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function xxxAction()
    {
        $histo3 = new Histogram();
        $histo3->setElementID('chart');
        $histo3->getData()->setArrayToTable(
            [
                ['Quarks', 'Leptons', 'Gauge Bosons', 'Scalar Bosons'],
                [2/3, -1, 0, 0],
                [2/3, -1, 0, null],
                [2/3, -1, 0, null],
                [-1/3, 0, 1, null],
                [-1/3, 0, -1, null],
                [-1/3, 0, null, null],
                [-1/3, 0, null, null]
            ]
        );
        $histo3->getOptions()->setTitle('Charges of subatomic particles');
        $histo3->getOptions()->getLegend()->setPosition('top');
        $histo3->getOptions()->getLegend()->setMaxLines(2);
        $histo3->getOptions()->setColors(['#5C3292', '#1A8763', '#871B47', '#999999']);
        $histo3->getOptions()->setInterpolateNulls(false);
        $histo3->getOptions()->getAnimation()->setStartup(true);
        $histo3->getOptions()->getAnimation()->setEasing('linear');
        $histo3->getOptions()->setAxisTitlesPosition('out');
        $histo3->getOptions()->setWidth(700);
        $histo3->getOptions()->setHeight(500);
        $histo3->getOptions()->getBar()->setGroupWidth(100);
        //$histo3->getOptions()->getHAxis()->getMinorGridlines()->setColor('#ff0000');
        $histo3->getOptions()->getHAxis()->getGridlines()->setColor('#ff0000');
        //$histo3->getOptions()->getVAxis()->getMinorGridlines()->setColor('#00ff00');
        $histo3->getOptions()->getVAxis()->getGridlines()->setColor('#00ff00');

        return $this->render(
            'CMENGoogleChartsBundle::chart.html.twig',
            array(
                'chart' => $histo3,
            )
        );
    }
}
