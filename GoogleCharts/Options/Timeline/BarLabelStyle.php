<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

/**
 * @author Christophe Meneses
 */
class BarLabelStyle
{
    /**
     * @var string
     */
    protected $fontName;

    /**
     * @var int
     */
    protected $fontSize;


    /**
     * @param string $fontName
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;
    }

    /**
     * @param int $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }
}
