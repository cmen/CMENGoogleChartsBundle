<?php

namespace CMENGoogleChartsBundle\Controller;

use CMENGoogleChartsBundle\GoogleCharts\PieChart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
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


        return $this->render(
            'CMENGoogleChartsBundle::test.html.twig',
            array(
                'piechart' => $piechart,
                'piechartArrayTable' => $piechartArrayTable,
                'piechart3D' => $piechart3D
            )
        );
    }
}
