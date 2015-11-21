<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Tooltip
{
    /**
     * If set to true, use HTML-rendered (rather than SVG-rendered) tooltips. See Customizing Tooltip Content for
     * more details.
     * Note : customization of the HTML tooltip content via the tooltip column data role is not supported by the
     * Bubble Chart visualization.
     *
     * @var boolean
     */
    protected $isHtml;

    /**
     * @param boolean $isHtml
     *
     * @return Tooltip
     */
    public function setIsHtml($isHtml)
    {
        $this->isHtml = $isHtml;

        return $this;
    }
}
