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

    /**
     * @var Events
     */
    protected $events;


    public function __construct()
    {
        $this->data = new Data();
        $this->events = new Events($this);
    }


    /**
     * Returns chart's name.
     *
     * @return string
     */
    public function getName()
    {
        return 'chart' . ucfirst($this->elementID);
    }

    /**
     * Returns data chart's name
     *
     * @return string
     */
    public function getDataName()
    {
        return 'data'. ucfirst($this->getName());
    }

    /**
     * Returns options chart's name
     *
     * @return string
     */
    public function getOptionsName()
    {
        return 'options'. ucfirst($this->getName());
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
     * Returns the Javascript of the beginning of the chart (Declaration, data and options).
     *
     * @return string Javascript
     *
     * @throws GoogleChartsException
     */
    public function startDraw()
    {
        if ($this->elementID === null) {
            throw new GoogleChartsException('Container is not defined.');
        }

        $js = 'var ' . $this->getName() . ' = new google.' . $this->getLibrary() . '.' . $this->getType() .
            '(document.getElementById("' . $this->elementID . '"));';

        if (!$this instanceof DiffChart) {
            $js .= $this->data->draw($this->getDataName());

        } else {
            $js .= $this->getOldChart()->getData()->draw('old_' . $this->getDataName()) .
                $this->getNewChart()->getData()->draw('new_' . $this->getDataName()) .
                'var ' . $this->getDataName() . ' = ' . $this->getName() .
                    '.computeDiff(old_' . $this->getDataName() . ',
                 new_' . $this->getDataName() . ');';
        }

        $js .= $this->options->draw($this->getOptionsName());

        return $js;
    }

    /**
     * Returns the Javascript of the end of the chart (Events and drawing).
     *
     * @return string
     */
    public function endDraw()
    {
        return $this->events->draw(). $this->getName() .
            '.draw('. $this->getDataName() . ', '. $this->getOptionsName() .');';
    }

    /**
     * Returns Javascript of chart.
     *
     * @return string Javascript
     *
     * @throws GoogleChartsException
     *
     * @deprecated Will be remove in 1.0
     */
    public function draw()
    {
        if ($this->elementID === null) {
            throw new GoogleChartsException('Container is not defined.');
        }

        $js = 'var ' . $this->getName() . ' = new google.' . $this->getLibrary() . '.' . $this->getType() .
            '(document.getElementById("' . $this->elementID . '"));';

        if (!$this instanceof DiffChart) {
            $js .= $this->data->draw($this->getDataName());

        } else {
            $js .= $this->getOldChart()->getData()->draw('old_' . $this->getDataName()) .
                $this->getNewChart()->getData()->draw('new_' . $this->getDataName()) .
                'var ' . $this->getDataName() . ' = ' . $this->getName() .
                '.computeDiff(old_' . $this->getDataName() . ',
                 new_' . $this->getDataName() . ');';
        }

        $js .= $this->options->draw($this->getOptionsName()) . $this->events->draw().
            $this->getName() . '.draw('. $this->getDataName() . ', '. $this->getOptionsName() .');';

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
     * @return string
     */
    public function getElementID()
    {
        return $this->elementID;
    }

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return Events
     */
    public function getEvents()
    {
        return $this->events;
    }
}
