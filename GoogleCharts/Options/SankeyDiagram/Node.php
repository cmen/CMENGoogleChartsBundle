<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\WidthTrait;

/**
 * @author Christophe Meneses
 */
class Node
{
    /**
     * @var Label
     */
    protected $label;

    /**
     * Allows you to select nodes.
     *
     * @var bool
     */
    protected $interactivity;

    /**
     * Horizontal distance between the label and the node.
     *
     * @var int
     */
    protected $labelPadding;

    /**
     * Vertical distance between nodes.
     *
     * @var int
     */
    protected $nodePadding;

    use WidthTrait;

    use ColorsTrait;

    /**
     * Sets a coloring mode for the sankey nodes. Possible values:
     *      'unique' - Each node will receive a unique color.
     *
     * @var string
     */
    protected $colorMode;

    public function __construct()
    {
        $this->label = new Label();
    }

    public function getLabel(): Label
    {
        return $this->label;
    }

    /**
     * @return $this
     */
    public function setInteractivity(bool $interactivity)
    {
        $this->interactivity = $interactivity;

        return $this;
    }

    /**
     * @return $this
     */
    public function setLabelPadding(int $labelPadding)
    {
        $this->labelPadding = $labelPadding;

        return $this;
    }

    /**
     * @return $this
     */
    public function setNodePadding(int $nodePadding)
    {
        $this->nodePadding = $nodePadding;

        return $this;
    }

    /**
     * @return $this
     */
    public function setColorMode(string $colorMode)
    {
        $this->colorMode = $colorMode;

        return $this;
    }
}
