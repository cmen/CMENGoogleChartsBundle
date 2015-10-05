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
     * Version of Google Charts used.
     *
     * @var string
     */
    protected $version;

    /**
     * True if an older version of Google Charts is used.
     *
     * @var boolean
     */
    protected $oldVersion;

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
        if ($this->elementID === null) {
            throw new GoogleChartsException('Container is not defined.');
        }

        $js = '<script type="text/javascript">';

        if (!$this->oldVersion) {
            $js .= 'google.load("visualization", "' . $this->version . '", {packages:["' . $this->getPackage() . '"]});
                google.setOnLoadCallback(drawChart);';

        } else {
            $js .= 'google.charts.load("' . $this->version . '", {packages: ["' . $this->getPackage() . '"]});
                google.charts.setOnLoadCallback(drawChart);';
        }

        $js .= 'function drawChart() { ' .
            $this->data->draw() .
            $this->options->draw() .
            'var chart = new google.' . $this->getLibrary() . '.' . $this->getType() .
            '(document.getElementById("' . $this->elementID . '"));
                chart.draw(data, options);
            }
        </script>';

        return $js;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        if (in_array($this->version, array('1', '1.1'))) {
            $this->oldVersion = false;

        } else {
            $this->oldVersion = true;
        }
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
