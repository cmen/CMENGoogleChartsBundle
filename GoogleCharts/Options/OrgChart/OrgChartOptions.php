<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\OrgChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AllowHtmlTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
class OrgChartOptions implements ChartOptionsInterface
{
    /**
     * Determines if double click will collapse a node.
     *
     * @var bool
     */
    protected $allowCollapse;

    use AllowHtmlTrait;

    /**
     * A class name to assign to node elements. Apply CSS to this class name to specify colors or styles for the chart
     * elements.
     *
     * @var string
     */
    protected $nodeClass;

    /**
     * A class name to assign to selected node elements. Apply CSS to this class name to specify colors or styles for
     * selected chart elements.
     *
     * @var string
     */
    protected $selectedNodeClass;

    /**
     * 'small', 'medium' or 'large'.
     *
     * @var string
     */
    protected $size;

    /**
     * @return $this
     */
    public function setAllowCollapse(bool $allowCollapse)
    {
        $this->allowCollapse = $allowCollapse;

        return $this;
    }

    /**
     * @return $this
     */
    public function setNodeClass(string $nodeClass)
    {
        $this->nodeClass = $nodeClass;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSelectedNodeClass(string $selectedNodeClass)
    {
        $this->selectedNodeClass = $selectedNodeClass;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSize(string $size)
    {
        $this->size = $size;

        return $this;
    }
}
