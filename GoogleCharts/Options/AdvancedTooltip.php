<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedTooltip extends MediumTooltip
{
    /**
     *  If set to true, allows the drawing of tooltips to flow outside of the bounds of the chart on all sides.
     *  Note: This only applies to HTML tooltips. If this is enabled with SVG tooltips, any overflow outside of the
     * chart bounds will be cropped. See Customizing Tooltip Content for more details.
     *
     * @var bool
     */
    protected $ignoreBounds;

    /**
     * @return $this
     */
    public function setIgnoreBounds(bool $ignoreBounds)
    {
        $this->ignoreBounds = $ignoreBounds;

        return $this;
    }
}
