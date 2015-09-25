<?php

namespace CMENGoogleChartsBundle\Controller;

use CMENGoogleChartsBundle\GoogleCharts\PieChart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/piechart", name="piechart")
     */
    public function indexAction(Request $request)
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
