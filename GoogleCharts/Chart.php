<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff\DiffChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsDraw;

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
     * @var ChartOptionsDraw
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
    abstract public function getPackage();

    /**
     * Returns the instance options.
     */
    abstract public function getOptions();

    /**
     * Sets the instance Options
     *
     * @param ChartOptionsDraw $options
     *
     * @return ChartOptionsDraw
     */
    abstract public function setOptions($options);

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

        $chartName = 'chart_' . $this->elementID;

        $js = 'var ' . $chartName . ' = new google.' . $this->getLibrary() . '.' . $this->getType() .
            '(document.getElementById("' . $this->elementID . '"));';

        if (!$this instanceof DiffChart) {
            $js .= $this->data->draw($this->elementID);

        } else {
            $js .= $this->getOldChart()->getData()->draw('old_' . $this->elementID) .
                $this->getNewChart()->getData()->draw('new_' . $this->elementID) .
                'var data_' . $this->elementID . ' = ' . $chartName . '.computeDiff(data_old_' . $this->elementID . ',
                 data_new_' . $this->elementID . ');';
        }

        $js .= $this->options->draw() . $chartName . '.draw(data_' . $this->elementID . ', options);';

        return $js;
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
