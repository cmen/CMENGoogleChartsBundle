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

    public function getType(): string
    {
        return 'Sankey';
    }

    public function getPackage(): string
    {
        return 'sankey';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::ERROR,
            EventType::ON_MOUSE_OUT,
            EventType::ON_MOUSE_OVER,
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): SankeyDiagramOptions
    {
        return $this->options;
    }

    /**
     * @param SankeyDiagramOptions $options
     */
    public function setOptions(/* SankeyDiagramOptions */$options): SankeyDiagram
    {
        $this->options = $options;

        return $this;
    }
}
