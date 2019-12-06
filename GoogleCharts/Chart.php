<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
abstract class Chart
{
    /**
     * @var string|null
     */
    protected $elementID;

    /**
     * @var Data
     */
    protected $data;

    /**
     * @var ChartOptionsInterface
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
        if (null === $this->elementID) {
            return '';
        }

        return 'chart'.ucfirst($this->elementID);
    }

    /**
     * Returns data chart's name.
     *
     * @return string
     */
    public function getDataName()
    {
        return 'data'.ucfirst($this->getName());
    }

    /**
     * Returns options chart's name.
     *
     * @return string
     */
    public function getOptionsName()
    {
        return 'options'.ucfirst($this->getName());
    }

    /**
     * Returns the chart type.
     *
     * @return string
     */
    abstract public function getType();

    /**
     * Returns library used by chart.
     *
     * @return string
     */
    public function getLibrary()
    {
        return 'visualization';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    abstract public function getPackage();

    /**
     * Returns available event types.
     *
     * @return string[]
     */
    abstract public function getAvailableEventTypes();

    /**
     * Returns the instance options.
     *
     * @return ChartOptionsInterface
     */
    abstract public function getOptions();

    /**
     * Sets the instance Options.
     *
     * @param ChartOptionsInterface $options
     *
     * @return $this
     */
    abstract public function setOptions($options);

    /**
     * @param string $elementID
     *
     * @return $this
     */
    public function setElementID($elementID)
    {
        $this->elementID = $elementID;

        return $this;
    }

    /**
     * @return string|null
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
