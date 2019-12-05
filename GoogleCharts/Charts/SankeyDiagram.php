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

    public function getType()
    {
        return 'Sankey';
    }

    public function getPackage()
    {
        return 'sankey';
    }

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
     * @param SankeyDiagramOptions $options
     *
     * @return SankeyDiagram
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
