<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FontSizeTrait
{
    /**
     * The default font size, in pixels, of all text in the chart. You can override this using properties for specific
     * chart elements.
     *
     * Default: automatic
     *
     * @var int
     */
    protected $fontSize;

    /**
     * @return $this
     */
    public function setFontSize(int $fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
