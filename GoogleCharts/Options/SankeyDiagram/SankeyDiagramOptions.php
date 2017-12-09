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

    /**
     * SankeyDiagramOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->sankey = new Sankey();
        $this->tooltip = new MediumTooltip();
    }

    /**
     * @return Sankey
     */
    public function getSankey()
    {
        return $this->sankey;
    }

    /**
     * @return MediumTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }
}
