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
     */
    public function getName(): string
    {
        if (null === $this->elementID) {
            return '';
        }

        return 'chart'.ucfirst($this->elementID);
    }

    /**
     * Returns data chart's name.
     */
    public function getDataName(): string
    {
        return 'data'.ucfirst($this->getName());
    }

    /**
     * Returns options chart's name.
     */
    public function getOptionsName(): string
    {
        return 'options'.ucfirst($this->getName());
    }

    /**
     * Returns the chart type.
     */
    abstract public function getType(): string;

    /**
     * Returns library used by chart.
     */
    public function getLibrary(): string
    {
        return 'visualization';
    }

    /**
     * Returns the chart package.
     */
    abstract public function getPackage(): string;

    /**
     * Returns available event types.
     *
     * @return string[]
     */
    abstract public function getAvailableEventTypes(): array;

    /**
     * Returns the instance options.
     *
     * @return ChartOptionsInterface
     */
    abstract public function getOptions()/* : ChartOptionsInterface */;

    /**
     * Sets the instance Options.
     *
     * @param ChartOptionsInterface $options
     *
     * @return $this
     */
    abstract public function setOptions(/* ChartOptionsInterface */$options)/* : Chart */;

    /**
     * @return $this
     */
    public function setElementID(string $elementID)
    {
        $this->elementID = $elementID;

        return $this;
    }

    public function getElementID(): ?string
    {
        return $this->elementID;
    }

    public function getData(): Data
    {
        return $this->data;
    }

    public function getEvents(): Events
    {
        return $this->events;
    }
}
