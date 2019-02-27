<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram\SankeyDiagramOptions;

/**
 * @author Christophe Meneses
 */
class SankeyDiagram extends Chart
{
    /**
     * @var SankeyDiagramOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new SankeyDiagramOptions();
    }

    /**
     * Returns the chart type.
     *
     * @return string
     */
    public function getType()
    {
        return 'Sankey';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    public function getPackage()
    {
        return 'sankey';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
    {
        return [
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return SankeyDiagramOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options SankeyDiagramOptions
     *
     * @return SankeyDiagram
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
