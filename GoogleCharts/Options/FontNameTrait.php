<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FontNameTrait
{
    /**
     * The default font face for all text in the chart. You can override this using properties for specific chart
     * elements.
     *
     * Default: 'Arial'
     *
     * @var string
     */
    protected $fontName;

    /**
     * @return $this
     */
    public function setFontName(string $fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }
}
