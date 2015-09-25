<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\Exception\GoogleChartsException;
use CMENGoogleChartsBundle\GoogleCharts\Options\Options;

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
     * @var Options
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
     * Returns the chart package.
     *
     * @return string
     */
    abstract protected function getPackage();

    /**
     * @return Options
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
            throw new GoogleChartsException('Container is not defined. You must use setElementID().');
        }

        return '<script type="text/javascript">
                google.load("visualization", "1", {packages:["'. $this->getPackage() .'"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    ' . $this->data->draw() .
                    $this->options->draw() .
                    'var chart = new google.visualization.' . $this->getType() .
                    '(document.getElementById("' . $this->elementID . '"));
                    chart.draw(data, options);
                }
            </script>';
    }

    /**
     * @return string
     */
    public function getElementID()
    {
        return $this->elementID;
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
