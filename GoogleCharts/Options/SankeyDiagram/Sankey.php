<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

/**
 * @author Christophe Meneses
 */
class Sankey
{
    /**
     * With multilevel sankeys, it's sometimes nonobvious where nodes should be placed for optimal readability. The D3
     * layout engine experiments with different node layouts, stopping when sankey.iterations attempts have been made.
     * The larger this number, the more pleasing the layout of complex sankeys, but it comes with a cost: the sankeys
     * will take longer to render. Conversely, the shorter this number, the quicker your charts will render.
     *
     * @var int
     */
    protected $iterations;

    /**
     * @var Link
     */
    protected $link;

    /**
     * @var Node
     */
    protected $node;

    /**
     * Sankey constructor.
     */
    public function __construct()
    {
        $this->link = new Link();
        $this->node = new Node();
    }

    /**
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return Node
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param int $iterations
     *
     * @return $this
     */
    public function setIterations($iterations)
    {
        $this->iterations = $iterations;

        return $this;
    }
}
