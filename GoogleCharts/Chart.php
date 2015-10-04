<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\Exception\GoogleChartsException;
use CMENGoogleChartsBundle\GoogleCharts\Options\ChartOptions;

/**
 * @author Christophe Meneses
 */
abstract class Chart
{
    /**
     * @var string
     */
    protected $elementID;

    /**
     * @var Data
     */
    protected $data;

    /**
     * @var ChartOptions
     */
    protected $options;


    public function __construct()
    {
        $this->data = new Data();
    }


    /**
     * Returns the chart type.
     *
     * @return string
     */
    abstract protected function getType();

    /**
     * Returns library used by chart.
     *
     * @return string
     */
    abstract protected function getLibrary();

    /**
     * Returns the chart package.
     *
     * @return string
     */
    abstract protected function getPackage();

    /**
     * Returns the instance options.
     */
    abstract public function getOptions();

    /**
     * Returns Javascript of chart.
     *
     * @return string Javascript
     *
     * @throws GoogleChartsException
     */
    public function draw()
    {
        // TODO : mettre la version en paramètre

        if ($this->elementID === null) {
            throw new GoogleChartsException('Container is not defined.');
        }

        return '<script type="text/javascript">
                google.load("visualization", "1", {packages:["'. $this->getPackage() .'"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    ' . $this->data->draw() .
                    $this->options->draw() .
                    'var chart = new google.'. $this->getLibrary() .'.' . $this->getType() .
                    '(document.getElementById("' . $this->elementID . '"));
                    chart.draw(data, options);
                }
            </script>';
    }

    /**
     * @param string $elementID
     */
    public function setElementID($elementID)
    {
        $this->elementID = $elementID;
    }

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }
}
