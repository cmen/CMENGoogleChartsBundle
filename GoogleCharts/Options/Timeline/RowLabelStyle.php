<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

/**
 * @author Christophe Meneses
 */
class RowLabelStyle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $fontName;

    /**
     * @var int
     */
    protected $fontSize;


    /**
     * @param string $color
     *
     * @return RowLabelStyle
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return RowLabelStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return RowLabelStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
