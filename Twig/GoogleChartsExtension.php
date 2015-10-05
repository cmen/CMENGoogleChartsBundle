<?php

namespace CMENGoogleChartsBundle\Twig;

use CMENGoogleChartsBundle\GoogleCharts\Chart;

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
        $chart->setVersion($this->version);

        if ($elementID) {
            $chart->setElementID($elementID);
        }

        return $chart->draw();
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'cmen_google_charts_extension';
    }
}
