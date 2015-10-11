<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

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
     * @var boolean
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

    /**
     * Thickness of the node.
     *
     * @var int
     */
    protected $width;

    /**
     * Custom color palette for sankey nodes. Nodes will cycle through this palette giving each node its own color.
     *
     * @var string[]
     */
    protected $colors;

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


    /**
     * @return Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param boolean $interactivity
     */
    public function setInteractivity($interactivity)
    {
        $this->interactivity = $interactivity;
    }

    /**
     * @param int $labelPadding
     */
    public function setLabelPadding($labelPadding)
    {
        $this->labelPadding = $labelPadding;
    }

    /**
     * @param int $nodePadding
     */
    public function setNodePadding($nodePadding)
    {
        $this->nodePadding = $nodePadding;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param string[] $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @param string $colorMode
     */
    public function setColorMode($colorMode)
    {
        $this->colorMode = $colorMode;
    }
}
