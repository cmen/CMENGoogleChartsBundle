<?php

namespace CMEN\GoogleChartsBundle\Twig;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
class GoogleChartsExtension extends \Twig_Extension
{
    /**
     * Version of Google Charts used.
     *
     * @var string
     */
    private $version;


    public function __construct($version)
    {
        $this->version = $version;
    }


    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('drawChart', array($this, 'drawChart'), array('is_safe' => array('html')))
        );
    }

    /**
     * Returns Javascript to draw a chart in Twig template.
     *
     * @param Chart $chart A Chart Instance
     * @param string $elementID HTML element ID
     *
     * @return string The Javascript
     */
    public function drawChart(Chart $chart, $elementID = null)
    {
        if ($elementID) {
            $chart->setElementID($elementID);
        }

        $js = '<script type="text/javascript">';

        if (in_array($this->version, array('1', '1.1'))) {
            $js .= 'google.load("visualization", "' . $this->version . '", {packages:["' . $chart->getPackage() . '"]});
                google.setOnLoadCallback(drawChart);';

        } else {
            $js .= 'google.charts.load("' . $this->version . '", {packages: ["' . $chart->getPackage() . '"]});
                google.charts.setOnLoadCallback(drawChart);';
        }

        return $js . 'function drawChart() { ' . $chart->draw() . '} </script>';
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'cmen_google_charts_extension';
    }
}
