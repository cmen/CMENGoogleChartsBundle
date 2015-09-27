<?php

namespace CMENGoogleChartsBundle\Controller;

use CMENGoogleChartsBundle\GoogleCharts\Histogram;
use CMENGoogleChartsBundle\GoogleCharts\PieChart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
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
        $histo3->getOptions()->getHAxis()->getMinorGridlines()->setColor('#ff0000');
        $histo3->getOptions()->getVAxis()->getMinorGridlines()->setColor('#00ff00');

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
        $pieAllIn = new PieChart();
        $pieAllIn->setElementID('pieTreshold');
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
        $pieAllIn->getOptions()->setEnableInteractivity(false);
        $pieAllIn->getOptions()->setForceIFrame(true);
        $pieAllIn->getOptions()->setReverseCategories(true);
        $pieAllIn->getOptions()->setSliceVisibilityThreshold(0.2);
        $pieAllIn->getOptions()->setPieResidueSliceColor('#dd0000');
        $pieAllIn->getOptions()->setPieResidueSliceLabel('Autres');

        return $this->render(
            'CMENGoogleChartsBundle::piechart.html.twig',
            array(
                'pieAllIn' => $pieAllIn,
            )
        );
    }
}
