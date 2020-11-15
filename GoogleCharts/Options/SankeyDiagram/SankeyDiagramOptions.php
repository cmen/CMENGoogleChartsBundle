<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTooltip;

/**
 * @author Christophe Meneses
 */
class SankeyDiagramOptions extends ChartOptions
{
    /**
     * @var Sankey
     */
    protected $sankey;

    /**
     * @var MediumTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->sankey = new Sankey();
        $this->tooltip = new MediumTooltip();
    }

    public function getSankey(): Sankey
    {
        return $this->sankey;
    }

    public function getTooltip(): MediumTooltip
    {
        return $this->tooltip;
    }
}
