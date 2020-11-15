<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;

/**
 * @author Christophe Meneses
 */
class Link
{
    /**
     * @var Color
     */
    protected $color;

    use ColorsTrait;

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

    public function getColor(): Color
    {
        return $this->color;
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
