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
     *
     * @return BarLabelStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return BarLabelStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
