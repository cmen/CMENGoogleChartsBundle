<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

/**
 * @author Christophe Meneses
 */
class Link
{
    /**
     * @var Color
     */
    protected $color;

    /**
     * Custom color palette for sankey links. Nodes will cycle through this palette giving the links for that node
     * the color.
     *
     * @var string[]
     */
    protected $colors;

    /**
     * Sets a coloring mode for the links between nodes. Possible values :
     *    'source' - The color of the source node is used for the links to all target nodes.
     *    'target' - The color of the target node is used for the link to its source nodes.
     *    'gradient' - The link between a source and target node is colored as a gradient from the source node color
     *          to the target node color.
     *    'none' - the default option; link colors will be set to the default (or a color as specified by the
     *          sankey.link.color.fill and sankey.link.color.fillOpacity options).
     *
     * This option overrides sankey.link.color.
     *
     * @var string
     */
    protected $colorMode;


    public function __construct()
    {
        $this->color = new Color();
    }


    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string[] $colors
     *
     * @return Link
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @param string $colorMode
     *
     * @return Link
     */
    public function setColorMode($colorMode)
    {
        $this->colorMode = $colorMode;

        return $this;
    }
}
